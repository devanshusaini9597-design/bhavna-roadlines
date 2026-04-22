#!/usr/bin/env bash
set -euo pipefail

# ─────────────────────────────────────────────────────────────
#  Bhavna Roadlines — runtime entrypoint for Railway
# ─────────────────────────────────────────────────────────────
#  1. Bind Apache to the dynamic $PORT Railway injects
#  2. Create .env from environment if it does not exist
#  3. Generate APP_KEY on first boot if missing
#  4. Warm Laravel caches (config/route/view)
#  5. Run migrations (safe --force for non-interactive)
#  6. Hand off to Apache
# ─────────────────────────────────────────────────────────────

: "${PORT:=8080}"
export PORT

echo "▶ Binding Apache to port ${PORT}"

# Apache listens on ${PORT} via envvar expansion in its vhost file.
# But `Listen ${PORT}` in conf only works if we export Apache envvars.
export APACHE_LISTEN_PORT="${PORT}"

# Rewrite the vhost (simpler than Apache's envvar machinery)
sed -i "s/\${PORT}/${PORT}/g" /etc/apache2/sites-available/000-default.conf
# Also clean up the default Listen 80 directive to avoid conflicts
sed -i "s/^Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf || true

cd /var/www/html

# ── .env bootstrap ───────────────────────────────────────────
if [ ! -f .env ]; then
    echo "▶ No .env found — creating from environment variables"
    if [ -f .env.example ]; then
        cp .env.example .env
    else
        touch .env
    fi
fi

# ── APP_KEY ──────────────────────────────────────────────────
if ! grep -qE '^APP_KEY=base64:[A-Za-z0-9+/=]{40,}' .env; then
    echo "▶ Generating APP_KEY"
    php artisan key:generate --force --no-interaction || true
fi

# ── Storage link (for public file uploads) ───────────────────
php artisan storage:link --force --no-interaction 2>/dev/null || true

# ── Cache config / routes / views ────────────────────────────
echo "▶ Warming caches"
php artisan config:clear   --no-interaction || true
php artisan route:clear    --no-interaction || true
php artisan view:clear     --no-interaction || true
php artisan config:cache   --no-interaction || true
php artisan route:cache    --no-interaction || true
php artisan view:cache     --no-interaction || true

# ── Database migrations (optional; only if DB configured) ────
if [ -n "${DB_HOST:-}" ] && [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    echo "▶ Running migrations"
    php artisan migrate --force --no-interaction || echo "⚠  Migrations skipped/failed (continuing)"
fi

# ── Permissions (every boot — ephemeral FS on Railway) ───────
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

echo "▶ Starting Apache on :${PORT}"
exec "$@"
