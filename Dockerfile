## ────────────────────────────────────────────────────────────
##  Bhavna Roadlines — Laravel 11 on PHP 8.2 + Apache (Railway)
## ────────────────────────────────────────────────────────────
FROM php:8.2-apache

ENV DEBIAN_FRONTEND=noninteractive \
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_NO_INTERACTION=1 \
    APACHE_DOCUMENT_ROOT=/var/www/html/public

# ── System deps + PHP extensions ─────────────────────────────
RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        zip unzip git curl ca-certificates \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

# ── Apache MPM: force mpm_prefork (mod_php is not thread-safe) ──
# Disabling the others prevents "More than one MPM loaded" at boot.
RUN a2dismod -f mpm_event mpm_worker 2>/dev/null; \
    a2enmod mpm_prefork rewrite headers

# ── Composer ─────────────────────────────────────────────────
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ── Production PHP INI tweaks ────────────────────────────────
RUN { \
        echo 'memory_limit = 256M'; \
        echo 'upload_max_filesize = 20M'; \
        echo 'post_max_size = 20M'; \
        echo 'opcache.enable = 1'; \
        echo 'opcache.memory_consumption = 128'; \
        echo 'opcache.max_accelerated_files = 10000'; \
        echo 'opcache.validate_timestamps = 0'; \
    } > /usr/local/etc/php/conf.d/zz-production.ini

WORKDIR /var/www/html

# ── Install PHP deps first (cache layer) ─────────────────────
COPY composer.json composer.lock ./
RUN composer install \
        --no-dev \
        --no-scripts \
        --no-autoloader \
        --prefer-dist

# ── Copy application ─────────────────────────────────────────
COPY . .

# ── Finish composer autoload + permissions ───────────────────
# NOTE: use bash for brace expansion, and --no-scripts so artisan
# package:discover doesn't run during build (no APP_KEY yet).
SHELL ["/bin/bash", "-c"]
RUN composer dump-autoload --optimize --classmap-authoritative --no-dev --no-scripts \
    && mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/framework/testing \
        storage/logs \
        bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# ── Apache vhost + entrypoint ────────────────────────────────
COPY docker/apache-vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 8080
ENV PORT=8080

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
