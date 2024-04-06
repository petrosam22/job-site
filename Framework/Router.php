<?php 
namespace Framework;

 class Router {
    protected $routes =[];

 public function registerRoute($method , $uri,$action){

    list($controller, $controllerMethod) = explode('@',$action);
     $this->routes[] = [
        'method'=>$method,
        'uri'=>$uri,
        'controller'=>$controller,
        'controllerMethod'=>$controllerMethod
    ];
 }
    public function get($uri, $controller){
        return $this->registerRoute('GET',$uri, $controller);
    }
    public function post($uri, $controller){
        return $this->registerRoute('POST',$uri, $controller);

    }
    public function put($uri, $controller){
        return $this->registerRoute('PUT',$uri, $controller);

    }
    public function delete($uri, $controller){
        return $this->registerRoute('DELETE',$uri, $controller);

    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            
            if($route['uri'] === $uri && $route['method'] === $method ){
             //EXTRACT CONTROLLER AND CONTROLLER METHOD
            $controller ='App\\Controllers\\' . $route['controller'];
            $controllerMethod = $route['controllerMethod'];

            //instantiate the controller and call method

                $controllerInstance = new $controller();
                  $controllerInstance->$controllerMethod();
                return;
             }        
         }


         http_response_code(404);
         require   basePath('../App/controller/error/404.php');
         exit;
             }        
        }
 
      

 