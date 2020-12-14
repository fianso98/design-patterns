<?php
 namespace Patterns\Structural\Facade;

 interface AuthInterface {
     
     function emailValidate(string $email);
     function passwordValidate(string $password);
     function verifyData(string $email , string $password );

 }