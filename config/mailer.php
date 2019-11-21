<?php

use codexten\yii\mailjet\AwsMailer;

return [
    'awsMailer' => [
        'class' => AwsMailer::class,
        'access_key' => $params['aws.key'],
        'secret_key' => $params['aws.secret'],
//        'host' => 'email.us-east-1.amazonaws.com' // not required
    ]
];