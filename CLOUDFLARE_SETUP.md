# Cloudflare Tunnel Setup

## Konfigurasi Project

- **Domain**: sirekmobil.ta-ku.my.id
- **Tunnel ID**: 252715aa-c977-4156-9a10-4a95572bf497

## Cara dapat credentials file

Tunnel ID sudah ada: `252715aa-c977-4156-9a10-4a95572bf497`

### Install cloudflared locally

```bash
# Linux/Mac
curl -L https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64 -o cloudflared
chmod +x cloudflared

# Atau apt (Ubuntu/Debian)
sudo apt install cloudflared
```

### Login & dapat certificate

```bash
# Login ke Cloudflare
cloudflared tunnel login

# Token akses tunnel ini
cloudflared tunnel token 252715aa-c977-4156-9a10-4a95572bf497
```

File certificate otomatis dibuat di `~/.cloudflared/*.json`

### Copy certificate ke project

```bash
# Copy credentials file ke config/
cp ~/.cloudflared/252715aa-c977-4156-9a10-4a95572bf497.json config/
```

## Setup Public Hostname

Di Cloudflare Dashboard:
1. Buka tunnel: `252715aa-c977-4156-9a10-4a95572bf497`
2. Tab **Public Hostnames** → **Add a public hostname**
3. Isi:
   - **Subdomain**: `sirekmobil`
   - **Domain**: `ta-ku.my.id`
   - **Service**: `http://nginx:80`
4. Save

Hasil: https://sirekmobil.ta-ku.my.id

## Jalankan

```bash
# Pastikan config/config.yaml dan credentials file siap
ls -la config/

# Start semua services
docker-compose up -d

# Cek logs tunnel
docker-compose logs -f cloudflare
```

Akses aplikasi via: `https://sirekmobil.ta-ku.my.id`
