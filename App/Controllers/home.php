<?php 

use Framework\Database;
 $config = require basePath('/config/db.php');


 
 $db = new Database($config);


$listings =  $db->query('SELECT * FROM listings')->fetchAll();

// dd($test);
return view('home' ,[
    'listings'=>$listings,
]);
