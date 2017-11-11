<?php

namespace common\bootstrap;


use frontend\services\auth\PasswordResetService;
use yii\base\BootstrapInterface;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;
        $container->setSingleton(PasswordResetService::class);


    }
}