<?php
 namespace Patterns\Structural\Facade;

 class Login {
    protected $_login;
    public function __construct(Auth $auth){
        $this->_login= $auth;
    }
    public function loginAuth($email,$password){
        return $this->_login->
        emailValidate($email)->
        passwordValidate($password)->
        verifyData($email,$password);
    }

 }