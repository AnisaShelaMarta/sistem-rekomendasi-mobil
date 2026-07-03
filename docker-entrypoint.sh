#!/bin/bash

# Install dependencies if vendor missing
if [ ! -d /var/www/html/vendor ]; then
    echo "Installing Composer dependencies..."
    composer install --no-interaction --optimize-autoloader
fi

# Install node modules if node_modules missing
if [ ! -d /var/www/html/node_modules ]; then
    echo "Installing NPM dependencies..."
    npm install
    npm run build
fi

# Set permissions (only if running as root)
if [ "$(id -u)" = "0" ]; then
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
fi

# Run the command
exec "$@"
