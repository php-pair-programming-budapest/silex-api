<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

require_once __DIR__.'/../../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__.'/../../');
$dotenv->load();

return [
    'driver'    => 'pdo_mysql',
    'host'      => getenv('MYSQL_HOST'),
    'dbname'    => getenv('MYSQL_DATABASE'),
    'user'      => getenv('MYSQL_USERNAME'),
    'password'  => getenv('MYSQL_PASSWORD'),
    'charset'   => 'utf8',
];