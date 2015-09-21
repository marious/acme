<?php

include(realpath(__DIR__ . '/../bootstrap/start.php'));
Dotenv::load(__DIR__ . '/../');
include __DIR__ . '/../bootstrap/db.php';
include(realpath(__DIR__ . '/../routes.php'));

$match = $router->match();

if ($match) {
    list($controller, $method) = explode("@", $match['target']);
}

if ($match && is_callable(array($controller, $method))) {
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include __DIR__ . '/../views/404.php';
    exit;
}
