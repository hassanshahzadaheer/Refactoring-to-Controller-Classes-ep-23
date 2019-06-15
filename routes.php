<?php

// $router->get('re-test','controllers/index.php');
// $router->get('re-test/about','controllers/about.php');
// $router->get('re-test/about/culture','controllers/about-culture.php');
// $router->get('re-test/contact','controllers/contact.php');
// $router->post('re-test/names', 'controllers/add-name.php');

$router->get('re-test', 'PagesController@home');
$router->get('re-test/about', 'PagesController@about');
$router->get('re-test/contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
