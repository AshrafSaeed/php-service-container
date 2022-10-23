<?php

namespace AshrafSaeed\Php\Container;

class Initiate {

    public 
    function sendMail(string $username): string 
    {
        // Send Mail with normal class initialization
        $instance = new User(new Mail(new MailSender()));
        return $instance->sendMail($username);
    }

    public 
    function sendMailWithServiceContainer(string $username): string 
    {
        // Send Mail with Service Container class
        $container = new Container;
        $instance = $container->get(User::class);
        return $instance->sendMail("{$username} with Service Container");

    }

}
