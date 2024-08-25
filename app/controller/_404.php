
<?php

class _404 extends controller{
    public function index(){
        echo "404 page not found";
        $this->view('404');
    }
}

