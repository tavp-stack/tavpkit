# tavpkit

**Starter kit** lengkap untuk TAVP. Intinya: jangan mulai dari nol.
Satu perintah, dapat aplikasi yang langsung jalan dengan fitur umum.

## What's included

- **Auth** — Login, register, OTP via `tavpid`
- **Teams** — Multi-user teams with roles
- **API** — RESTful API with JWT authentication
- **Profile** — User profile management
- **2FA** — Two-factor authentication
- **Session management** — View/revoke active sessions

## Requirements

- PHP 8.1+
- Phalcon 5.x
- tavp-core
- tavpid

## Install

```bash
# Via tavp CLI (recommended)
tavp new myapp --kit

# Via module install
tavp module:install tavp/tavpkit
tavp migrate

# Via Composer
composer require tavp/tavpkit
```

## Kit types

| Kit | Description |
|---|---|
| `website` | Basic website with pages, no database |
| `application` | Full app with auth, database, API |
| `enterprise` | Application + Docker + deploy configs |

## Upgrade path

```bash
# Upgrade from website to application
tavp upgrade --to=application

# Upgrade from application to enterprise
tavp upgrade --to=enterprise
```

## Testing

```bash
composer test
```

## Status

Part of **0.1.0 Genesis** (ZeroVer `0.MINOR.PATCH`). Basic kit.
Full features (teams, API, 2FA) in `0.3.0`.

## License

MIT
