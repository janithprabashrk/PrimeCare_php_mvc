 <?php
 
 if($_SERVER['SERVER_NAME'] == 'localhost'){
    define('ROOT', 'http://localhost/php_mvc_backend/public');
 }else{
    define('ROOT', 'http://www.yourwebsite.com');
 }
    