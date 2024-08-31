<?php
// User class

class User{
    use Model;

    protected $table = 'users';

    protected $allowedColumns = [
        'fname',
        'lname',
        'age',
    ];

    public function validate($data){
        $this->errors = [];

        if(empty($data['fname'])){
            $this->errors['fname'] = 'fname not valid';
        }

        if(empty($data['lname'])){
            $this->errors['lname'] = 'lname not valid';
        }
        
        if(empty($this->errors)){
            return true;
        }
        return false;
    }
}