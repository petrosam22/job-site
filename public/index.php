

<?php 
include '../helpers.php';
require basePath('Router.php');

require basePath('Database.php');
  



$router = New Router();
$routes = require basePath('routes.php');
$uri = $_SERVER['REQUEST_URI']; 
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri,$method);
