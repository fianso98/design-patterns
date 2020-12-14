<?php
 namespace Patterns\Structural\Facade;

 class Auth implements AuthInterface{
     
    function emailValidate(string $email)
    {
        return $this;
    }
    function passwordValidate(string $password)
    {
        return $this;
    }
    function verifyData(string $email , string $password )
    {
        if($email=='sofiane@gmail.com' && $password == 'abcd1234'){
            return 'logged In'; 
        }else {
            return 'email or password is wrong';
        }
    }
 }