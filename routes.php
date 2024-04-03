<?php 
 


$router->get('/', './controllers/home.php');

$router->get('/listings', './controllers/listings/index.php');

$router->get('/listing', './controllers/listings/show.php');
