# 🚀 Quick Start - Sirek Mobil

## 1. Setup Cloudflare Tunnel (Wajib)

```bash
# Install cloudflared
curl -L https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64 -o cloudflared
chmod +x cloudflared
sudo mv cloudflared /usr/local/bin/

# Login ke Cloudflare
cloudflared tunnel login

# Dapatkan token untuk tunnel ini
cloudflared tunnel token 252715aa-c977-4156-9a10-4a95572bf497

# Copy certificate ke project
cp ~/.cloudflared/252715aa-c977-4156-9a10-4a95572bf497.json config/
```

## 2. Setup Environment

```bash
# Copy .env
cp .env.docker.example .env

# (Opsional) Generate APP_KEY
php artisan key:generate
```

## 3. Jalankan Docker

```bash
# Build & start
docker-compose up -d

# Cek status
docker-compose ps

# Cek logs
docker-compose logs -f cloudflare
```

## 4. Selesai!

Akses aplikasi:
- 🌐 **Public**: https://sirekmobil.ta-ku.my.id
- 🏠 **Local**: http://localhost:8080

---

## Troubleshooting

**Tunnel error?**
```bash
# Cek logs
docker-compose logs cloudflare

# Pastikan file certificate ada
ls -la config/252715aa-c977-4156-9a10-4a95572bf497.json
```

**MySQL connection failed?**
Tunggu ~10 detik, MySQL butuh waktu init.

**Port conflict?**
Edit `docker-compose.yml`: ganti `8080:80` → `8081:80`
