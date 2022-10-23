<?php

use AshrafSaeed\Php\Container\Initiate;
require __DIR__ . '/vendor/autoload.php';


print (new Initiate())->sendMail('Muhammad Ashraf');

echo '<br>';

print (new Initiate())->sendMailWithServiceContainer('Muhammad Ashraf');
