#!/bin/bash

# Deployment script for cPanel

echo "Starting deployment..."

# Install dependencies
composer install --optimize-autoloader --no-dev

# Generate key if not exists
php artisan key:generate

# Run migrations
php artisan migrate --force

# Create storage link
php artisan storage:link

# Cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets if Node.js available
if command -v npm &> /dev/null; then
    npm install
    npm run build
fi

echo "Deployment completed!"