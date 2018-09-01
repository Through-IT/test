<?php

class Router
{
    private $routes;

    /*
     * include routes.php
     * */
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
    }

    /*
     * Returns request string
     */
    private function getURI(){
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /*
     * run Url
     */
    public function run()
    {
        // print request string
        $uri = $this->getURI();

        //request routes.php
        foreach ($this->routes as $uriPattern => $path){

            //$uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)){

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //controller and action
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                //include class-conroller
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)){
                    include_once ($controllerFile);
                }

                //create object, run method
                if (class_exists($controllerName)) {
                    $controllerObject = new $controllerName;
                    if (method_exists($controllerObject, $actionName)) {
                        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    } else {
                        require_once (ROOT.'/views/inc/404.php');
                    }
                } else {
                    require_once (ROOT.'/views/inc/404.php');
                }

                if($result != null){
                    break;
                }

            }
        }

    }
}