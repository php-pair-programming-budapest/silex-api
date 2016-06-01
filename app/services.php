<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => getenv('MYSQL_HOST'),
        'dbname'    => getenv('MYSQL_DATABASE'),
        'user'      => getenv('MYSQL_USERNAME'),
        'password'  => getenv('MYSQL_PASSWORD'),
        'charset'   => 'utf8',
    ),
));

$app->register(new \Dbtlr\MigrationProvider\Provider\MigrationServiceProvider(), array(
    'db.migrations.path' => __DIR__ . '/../app/migrations',
));