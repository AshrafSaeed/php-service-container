<?php

namespace AshrafSaeed\Php\Container;

class Mail {
    
    public 
    function __construct(
        Private MailSender $mailSender
    ){}

    public 
    function sendMail(string $username) : string
    {
        return $this->mailSender->send($username);
    }

}