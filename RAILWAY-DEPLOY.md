# Deploying Bhavna Roadlines to Railway

This project is pre-configured to deploy to **Railway** via its Dockerfile builder. Total time from a fresh repo to a live URL: **~5 minutes**.

---

## 1 · Prerequisites

- A GitHub account (free)
- A Railway account — sign in at <https://railway.app> with GitHub (free tier: $5 of credit/month, enough for a small demo site)
- `git` installed locally

---

## 2 · Push the project to GitHub

Open PowerShell **inside the project folder** and run:

```powershell
git init
git add .
git commit -m "Initial commit — Bhavna Roadlines"

# Create an empty repo on GitHub first (no README, no .gitignore).
# Then replace the URL below with yours:
git branch -M main
git remote add origin https://github.com/<your-username>/bhavna-roadlines.git
git push -u origin main
```

> `.env`, `/vendor/` and `/node_modules/` are already excluded via `.gitignore` — **never commit your local `.env`**.

---

## 3 · Create the Railway project

1. Go to <https://railway.app/new> → **Deploy from GitHub repo**.
2. Pick the `bhavna-roadlines` repo you just pushed.
3. Railway will detect `railway.json` + `Dockerfile` and start the first build automatically.

The first build takes **~3–5 min** (PHP extensions + Composer install).

---

## 4 · Add environment variables

In the Railway service dashboard → **Variables** tab, set at minimum:

| Variable      | Value                                        |
| ------------- | -------------------------------------------- |
| `APP_NAME`    | `Bhavna Roadlines`                           |
| `APP_ENV`     | `production`                                 |
| `APP_DEBUG`   | `false`                                      |
| `APP_URL`     | *(leave empty for now — fill after step 5)*  |
| `LOG_CHANNEL` | `stack`                                      |
| `LOG_LEVEL`   | `error`                                      |

**`APP_KEY` is auto-generated** on first boot by `docker-entrypoint.sh`. If you want to pin one, run locally:

```powershell
php artisan key:generate --show
```

…and paste the output as the `APP_KEY` variable in Railway.

### Database (optional)

This demo site uses **no database** (home/about/services/etc. are static Blade views). You can skip DB vars entirely. If you later add models:

1. In Railway → **+ New** → **Database** → **MySQL**.
2. Railway auto-injects `MYSQL_URL` and friends. Add these mappings in your service's **Variables**:

```
DB_CONNECTION=mysql
DB_HOST=${{MySQL.MYSQLHOST}}
DB_PORT=${{MySQL.MYSQLPORT}}
DB_DATABASE=${{MySQL.MYSQLDATABASE}}
DB_USERNAME=${{MySQL.MYSQLUSER}}
DB_PASSWORD=${{MySQL.MYSQLPASSWORD}}
```

Migrations run automatically on deploy (via the entrypoint). Disable with `RUN_MIGRATIONS=false` if unwanted.

---

## 5 · Expose a public URL

1. Service → **Settings** → **Networking** → **Generate Domain**.
2. Railway gives you a `*.up.railway.app` URL immediately.
3. Copy that URL and **update `APP_URL`** in the Variables tab to match (e.g. `https://bhavna-roadlines.up.railway.app`).
4. Redeploy (Railway usually does this automatically when vars change).

### Custom domain (optional)

Networking → **Custom Domain** → enter `yourdomain.com` → add the CNAME record Railway shows you at your DNS provider. Auto-HTTPS via Let's Encrypt.

---

## 6 · Verify

Open the URL. You should see the home page. Check health:

```
https://<your-app>.up.railway.app/up
```

Should return **HTTP 200** with Laravel's built-in health JSON.

---

## Troubleshooting

| Symptom                                  | Fix                                                                          |
| ---------------------------------------- | ---------------------------------------------------------------------------- |
| **502 / health check failing**           | Check **Deployments → View Logs**. Usually missing `APP_KEY` or port binding. |
| **"No application encryption key"**      | Set `APP_KEY` manually, or wait — entrypoint generates one on first boot.    |
| **Assets 404 (CSS/JS)**                  | `APP_URL` must exactly match the Railway domain (no trailing slash).         |
| **"Mixed content" / no HTTPS**           | Already handled — `SetEnvIf X-Forwarded-Proto` trusts Railway's proxy.        |
| **Build fails on `composer install`**    | Ensure `composer.lock` is committed (it is).                                 |
| **Changes don't appear after push**      | Railway redeploys automatically on push to `main`. Check Deployments tab.    |

---

## File map (what Railway uses)

```
Dockerfile                    # PHP 8.2 + Apache build
railway.json                  # Railway-specific config (healthcheck on /up)
docker/
  apache-vhost.conf          # Apache vhost — dynamic ${PORT}
  docker-entrypoint.sh       # Runtime: env, key-gen, cache warm, migrate
.dockerignore                 # Keeps .env, vendor, .git out of the image
.gitignore                    # Keeps secrets out of the repo
```

---

**That's it.** Push to `main` → Railway rebuilds & deploys → URL updates. 🚚
