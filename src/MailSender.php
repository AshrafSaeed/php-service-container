<?php

namespace AshrafSaeed\Php\Container;

class MailSender {
    
    public 
    function send(string $username) : string
    {
        return "Email was sent to  ${username}";
    }

}
