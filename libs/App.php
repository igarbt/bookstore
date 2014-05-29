<?php

class App{

    function __construct(){
        $url = isset($_GET['url'])?$_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        Session::init();

        if(empty($url[0])){
            $controller = new Index();
            $controller->index();
            return false;
        }
        else{
            $file = 'controllers/'.$url[0].'.php';
            if(file_exists($file)){
                require $file;
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                if(isset($url[1])){
                    if(method_exists($controller, $url[1])){
                        if(isset($url[2])){
                            $controller->{$url[1]}($url[2]);
                        }
                        else{
                            $controller->{$url[1]}();
                        }
                    }
                    else{
                        echo 'Page does not exist';
                    }
                }
                $controller->index();
            }
            else{
                $controller = new Error();
                $controller->index();
                return false;
            }
        }
    }
} 