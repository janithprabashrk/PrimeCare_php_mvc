<?php

class Home extends controller{
    public function index(){
        echo "this is the home controller";
        $this->view('home');
    }

}

