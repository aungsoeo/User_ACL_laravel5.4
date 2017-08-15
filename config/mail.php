<?php

return [

    
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'from' => ['address' => 'jealousboy.boy17@gmail.com', 'name' => 'Aung Soe Oo'],
    'encryption' => null,
    'username' => 'aso',
    'password' => 'j.boy1717',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
