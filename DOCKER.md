# Docker Setup - Sirek Mobil

## 🔒 Security Notes

**IMPORTANT**: All credentials now use environment variables. Never commit `.env` to git.

Generate secure passwords:
```bash
openssl rand -base64 24  # For DB_PASSWORD
openssl rand -base64 32  # For MYSQL_ROOT_PASSWORD
```

Required environment variables in `.env`:
- `DB_PASSWORD` - MySQL user password
- `MYSQL_ROOT_PASSWORD` - MySQL root password (separate!)
- `TUNNEL_TOKEN` - Cloudflare tunnel token

## 📦 Services

- **app**: Laravel 12 (PHP 8.2-FPM) - runs as non-root user (UID 1000)
- **nginx**: Web server (port 8080) - reverse proxy to PHP-FPM
- **mysql**: MySQL 8.0 (internal only, no host port exposed)
- **cloudflare**: Cloudflare Tunnel - secure access to production

All services have health checks enabled.

## 🚀 Quick Start

### 1. Setup Cloudflare Tunnel (Wajib)

Lihat file [`CLOUDFLARE_SETUP.md`](./CLOUDFLARE_SETUP.md) untuk dapatkan `TUNNEL_TOKEN`.

### 2. Setup .env

```bash
# Copy template
cp .env.example .env.docker

# Edit dan tambahkan:
TUNNEL_TOKEN=eyJh...  # Dari Cloudflare

# Atau gunakan .env yang sudah disediakan
```

### 3. Jalankan

```bash
# Build & start semua services
docker-compose up -d

# Cek status
docker-compose ps

# Cek logs
docker-compose logs -f app nginx mysql
```

## 📡 Access

- **Local**: http://localhost:8080
- **Public**: https://sirekmobil.ta-ku.my.id (via Cloudflare Tunnel)
- **MySQL**: Internal only (not exposed to host for security)

## 🔧 Commands

```bash
# Stop semua
docker-compose down

# Restart spesifik service
docker-compose restart app

# Masuk ke container app
docker-compose exec app bash

# Run artisan command
docker-compose exec app php artisan migrate

# Clear cache
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear
```

## 🗄️ Database

- **Database**: `laravel`
- **User**: `sirekmobil_user`
- **Password**: Set via `DB_PASSWORD` in `.env`
- **Root**: Set via `MYSQL_ROOT_PASSWORD` in `.env`

Import SQL otomatis saat pertama kali start.

**Security**: MySQL port tidak di-expose ke host. Akses hanya lewat container network.

## 🔥 Troubleshooting

### Port 8080 sudah dipakai
Edit `docker-compose.yml`, ganti `8080:80` → `8081:80`

### MySQL connection error
Tunggu ~10-30 detik setelah `docker-compose up`. Cek health status:
```bash
docker-compose ps
```

### Cloudflare tunnel tidak connect
Cek token di `.env` benar. Lihat logs:
```bash
docker-compose logs cloudflare
```

### Permission error (seharusnya tidak terjadi - non-root user)
Jika terjadi, fix ownership:
```bash
sudo chown -R 1000:1000 storage bootstrap/cache
```
