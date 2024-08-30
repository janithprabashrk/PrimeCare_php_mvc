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
}