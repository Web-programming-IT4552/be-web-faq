# Project LT Web BackEnd

## Set Environment Variables

```
cp .env.example .env
```

## Build Setup

```
docker-compose up --build -d
```

## Install dependencies

```
docker-compose exec app composer install --no-scripts
```

## Optimize Artisan

```
docker-compose exec app php artisan key:generate
```

```
docker-compose exec app php artisan optimize
```

## Run migrations

```
docker-compose exec app php artisan migrate
```
