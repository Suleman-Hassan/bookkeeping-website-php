FROM dunglas/frankenphp:1-php8.4-alpine

WORKDIR /app

# Use PHP's production configuration
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Configure the web server
COPY Caddyfile /etc/caddy/Caddyfile

# Copy the complete PHP website, including pages, includes, and assets
COPY . /app/public

ENV PORT=80

CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]
