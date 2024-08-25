<?php
class App{

    private $controller = 'home';
    private $method = 'index';

    private function splitURL(){
        $URL = $_GET['url'] ?? 'home';#make home default
        $URL = explode('/', $URL);
        return $URL;
    }
    
    public function loadController(){
        $URL = $this->splitURL();
        $filename = "../app/controller/".ucfirst($URL[0]).".php";
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        } else {
            require "../app/controller/_404.php";# if no page found load 404 page
            $this->controller = '_404';
            
        }
        $controller = new $this->controller;
        call_user_func([$controller, $this->method],[]);
    }
    // $show(loadController());
}