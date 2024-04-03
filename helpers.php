<?php 


function basePath($path= ''){
    return __DIR__ . '/' . $path;
}


 function view($name , $data = []){

    $views =   basePath("App/views/{$name}.view.php");
    if(file_exists($views)){
       extract($data);
        require $views;
    }else{
        echo 'view not found';
    }
}

function loadPartial($name){ 

     $PartialsPath=  basePath("App/views/partials/{$name}.php");
     if(file_exists($PartialsPath)){
        return $PartialsPath;
    }else{
        echo 'view not found';
    }

}

function dd($value){
    die(var_dump($value));
}

function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}