<?php

class Home{
    
    use controller;
    public function index(){
        $user = new User;
        // $arr['id'] = 0;
        // $arr['fname'] = 'jonny';
        // $arr2['age'] = 22;
        // $result = $user->insert($arr);
        // $result = $user->where($arr, $arr2);
        // $result = $user->findAll();
        // show($result);
        // echo "this is the home controller";
        $this->view('home');
        // $user->delete(0);
    }

}

