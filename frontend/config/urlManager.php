<?php

return[
    'class' => 'yii\web\UrlManager',
    
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<_a:loin:logout>' => 'site/<_a>',
        'http://admin.example.com/login' => 'admin/user/login',

    '<_c:[\w\-]+>' => '<_c>/index',
    '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
    '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
    '<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_c>/<_a>',
    ],
        
];