<?php 


function basePath($path= ''){
    return __DIR__ . '/' . $path;
}


 function view($name){

    return  basePath("views/{$name}.view.php");
}

function loadPartial($name){ 

     return  basePath("views/partials/{$name}.php");

}