<?php

trait controller{

    public function view($name, $data = []){
        if(!empty($data)){
            extract($data);//will mak available to files below
        }
        $filename = "../app/views/".$name.".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            require "../app/views/404.view.php";# if no page found load 404 page
        }
    }
}