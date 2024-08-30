<?php
class App{

    private $controller = 'home';
    private $method = 'index';

    private function splitURL(){
        $URL = $_GET['url'] ?? 'home';#make home default
        $URL = explode('/', trim($URL, '/'));#split based on /
        return $URL;
    }
    
    public function loadController(){
        $URL = $this->splitURL();
        $filename = "../app/controller/".ucfirst($URL[0]).".php";
        
        #selects controller
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);#remove used parts
        } else {
            require "../app/controller/_404.php";# if no page found load 404 page
            $this->controller = '_404';
        }

        $controller = new $this->controller;

        #selects method
        if(!empty($URL[1])){
            if(method_exists($controller, $URL[1])){
                // echo "method function";
                $this->method = $URL[1];
                unset($URL[1]);#remove uses parts
            }else{
                // echo "index function";
            }
        }
        // show($URL);
        call_user_func_array([$controller, $this->method], $URL);

    }
    // $show(loadController());
}