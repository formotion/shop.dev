<?php
/* @var $this yii\web\View */
/* @var $user \shop\entities\User\User */
$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/signup/confirm', 'token' => $user->email_confirm_token]);
?>
    Hello <?= $user->username ?>,

    Follow the link below to confirm your email:

<?= $confirmLink ?>