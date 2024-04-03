<?php 
 $config = require basePath('/config/db.php');
 $db = new Database($config);


$listings =  $db->query('SELECT * FROM listings')->fetchAll();

// dd($test);
return view('listings/index' ,[
    'listings'=>$listings,
]);

 