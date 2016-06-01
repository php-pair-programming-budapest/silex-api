# Simple REST API in Silex

### Create DB migration file:

`vendor/bin/doctrine-migrations migrations:generate --db-configuration app/Migrations/db-config.php --configuration app/Migrations/migration-config.yml`

### Run DB migrations:

`vendor/bin/doctrine-migrations migrations:migrate --db-configuration app/Migrations/db-config.php --configuration app/Migrations/migration-config.yml`