<?php 

 class Router {
    protected $routes =[];

 public function registerRoute($method , $uri,$controller){
    $this->routes[] = [
        'method'=>$method,
        'uri'=>$uri,
        'controller'=>$controller
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
                require basePath('App/' . $route['controller']);
                return;
            }        
        }

        http_response_code(404);
        require   basePath('./controllers/error/404.php');
           exit;


    }
 }