<?php

namespace common\bootstrap;


use frontend\services\auth\PasswordResetService;
use frontend\services\contact\ContactService;
use yii\base\BootstrapInterface;
use yii\mail\MailerInterface;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

        $container->setSingleton(PasswordResetService::class);

        $container->setSingleton(ContactService::class, [],[
            $app->params['adminEmail']
        ]);

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });


    }
}