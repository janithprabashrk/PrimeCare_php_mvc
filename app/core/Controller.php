<?php

class controller{
    public function view($name){
        $filename = "../app/views/".$name.".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            require "../app/views/404.view.php";# if no page found load 404 page
        }
    }
}