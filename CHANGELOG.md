Table of Contents
=================
* [Change Log](#change-log)
  * [add monolog](#add-monolog)
  * [add web profiler](#add-web-profiler)
  * [add makeBundle](#add-makebundle)
  * [add dockerized DB container](#add-dockerized-db-container)
  * [add ORM for creating Entity via maker bundle](#add-orm-for-creating-entity-via-maker-bundle)
  * [add new migration via maker:migration](#add-new-migration-via-makermigration)
  
# Change Log

## add monolog
```bash
symfony composer req logger
```

## add web profiler
```bash
symfony composer req debug --dev
```

## add makeBundle
```bash
symfony composer require doctrine/annotations  ## maker bundle needs the annotation bundle
symfony composer require symfony/maker-bundle --dev
```

## add dockerized DB container
```bash
db:
    image: postgres:11-alpine
    environment:
        POSTGRES_USER: main
        POSTGRES_PASSWORD: main
        POSTGRES_DB: main
    ports: [2345:5432]
```

## add ORM for creating Entity via `maker bundle`
```bash
symfony composer req orm
```

add new entity "Conference" via `maker bundle`
```bash
symfony console make:entity Conference
```

## add new migration via `maker:migration`
```bash
symfony console make:migration
```
execute the generated migration
```bash
php bin/console doctrine:migrations:migrate
```

## add `easy_admin` bundle
```bash
composer req admin
```
