<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

require_once __DIR__.'/../app/services.php';
require_once __DIR__.'/../app/routing.php';

$app->run();