<?php

namespace AshrafSaeed\Php\Container;

class User {
    
    public 
    function __construct(
        Private Mail $mail
    ){}

    public 
    function sendMail(string $username): string 
    {
        return $this->mail->sendMail($username);
    }
}
