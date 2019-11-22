<?php

/* @var $params array */

return [
    'awsMailer' => [
        'class' => '\codexten\yii\mailqueue\MailQueue',
        'useFileTransport' => false,
        'htmlLayout' => false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => $params['aws.ses.host'],
            'username' => $params['aws.ses.username'],
            'password' => $params['aws.ses.password'],
            'port' => 587,
            'encryption' => 'tls',
        ],
    ]
];