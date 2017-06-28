<?php

require_once '../vendor/autoload.php';

require_once 'google/appengine/api/users/UserService.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();
