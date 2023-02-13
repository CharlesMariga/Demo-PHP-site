<?php

// return [
//     '/' => "controllers/index.php",
//     '/about' => "controllers/about.php",
//     '/note' => "controllers/notes/show.php",
//     '/notes' => "controllers/notes/index.php",
//     '/notes/create' => "controllers/notes/create.php",
//     '/contact' => "controllers/contact.php"
// ];


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
