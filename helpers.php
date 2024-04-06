<?php 


function basePath($path= ''){
    return __DIR__ . '/' . $path;
}


 function view($name , $data = []){

     $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
      extract($data);
      require $viewPath;
    } else {
      echo "View '{$name} not found!'";
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
 