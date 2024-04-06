<?php 

use Framework\Database;
 $config = require basePath('/config/db.php');
 $db = new Database($config);


 $id = $_GET['id'] ?? '';

 $params = [
     'id' => $id
 ];
//  $listing =  $db->query('SELECT * FROM listings WHERE id = :id' , $params)->fetch();
$listing = $db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();
// dd($listing);
 return view('listing/show' ,[
    'listing'=>$listing,
]);
 