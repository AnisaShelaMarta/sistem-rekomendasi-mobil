#!/bin/bash

echo "🔧 Setup Docker Sirek Mobil..."

# Generate APP_KEY
echo "Generating APP_KEY..."
APP_KEY=$(php -r "echo 'base64:' . base64_encode(random_bytes(32));")
sed -i "s/APP_KEY=/APP_KEY=$APP_KEY/" .env

# Build & start containers
echo "Building Docker containers..."
docker-compose build
docker-compose up -d

echo "✅ Setup selesai!"
echo "📝 Langkah berikutnya:"
echo "1. Setup Cloudflare Tunnel (lihat CLOUDFLARE_SETUP.md)"
echo "2. Akses: http://localhost:8080"
