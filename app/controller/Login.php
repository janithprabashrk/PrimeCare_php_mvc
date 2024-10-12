<?php

class Login{
    use controller;

    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $user = new User;
            $arr['email'] = $_POST['email'];
            $arr['password'] = $_POST['password'];
            $result = $user->first($arr,[]);
            show($result);
            if($result && isset($result->password) && $result->password == $arr['password']){
                // Remove the password field from the result object
                unset($result->password);
                // $_SESSION['user'] = $result;
                
                show("worked");
                // header('Location: home');
            }else{
                // echo "worked";
                // show($result['password']);
                $this->view('login');
            }
        
        $user = new User;

        // show($_POST);
        
        }
        // $result = $user->findAll();
        // show($result + "hrll");
        // echo "this is the home controller";
        // $user->delete(0);
        // show($_POST);
    }

    // public function hashPw($password) {
    //     // Use the bcrypt algorithm (default in password_hash) to hash the password
    //     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    //     return $hashedPassword;
    // }
    
}

