<?php

$router->map('GET', '/', 'Acme\Controllers\pageController@showHomePage', 'home');

$router->map('GET', '/register', 'Acme\Controllers\RegisterController@showRegisterPage', 'register');

$router->map('POST', '/register', 'Acme\Controllers\RegisterController@postRegister', 'postregister');

$router->map('GET', '/login', 'Acme\Controllers\RegisterController@showLogin', 'login');

