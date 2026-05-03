# Laravel 13 — Dockerized Starter

A Laravel 13 starter project with Docker-based infrastructure, Laravel Breeze authentication, TailwindCSS, Alpine.js, and Redis.

## Stack

- **PHP** 8.3 + **Laravel** 13
- **MySQL** 8.0
- **Redis** (cache, sessions, queues)
- **Nginx**
- **Vite** + **TailwindCSS** 3 + **Alpine.js**
- **Laravel Breeze** (authentication scaffolding)
- **Pest** (testing)

## Requirements

- [Docker](https://docs.docker.com/get-docker/) + Docker Compose

## Getting started

**1. Clone the repository**
```sh
git clone <your-repo-url>
cd bec1
```

**2. Copy the environment file**
```sh
cp .env.example .env
```

**3. Update the following variables in `.env`**
```dotenv
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_STORE=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

**4. Start the containers**
```sh
docker compose up -d
```

**5. Enter the app container and set up the project**
```sh
docker compose exec app bash
composer setup
```

The `composer setup` script handles: installing PHP dependencies, generating the app key, running migrations, installing Node dependencies, and building frontend assets.

**6. Access the app**

| Service    | URL                          |
|------------|------------------------------|
| App        | http://localhost:8989        |
| PHPMyAdmin | http://localhost:8080        |

## Development

Run all dev services (server, queue worker, log viewer, Vite) concurrently:
```sh
composer dev
```

## Testing

```sh
composer test
```

## Project structure

```
app/          # Application code (controllers, models)
bootstrap/    # Framework bootstrap files
config/       # Configuration files
database/     # Migrations, factories, seeders
docker/       # Nginx and PHP config for Docker
public/       # Web entry point
resources/    # Views, CSS, JS
routes/       # Route definitions
storage/      # Logs, cache, uploaded files
tests/        # Feature and unit tests (Pest)
```
