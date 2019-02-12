<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = 
[
    'id' => 'invscp',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'pt-BR',
    'timeZone' => 'UTC',
    'aliases' => 
    [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => 
    [
        'request' =>
        [
            'cookieValidationKey' => 'KT6aS-EFXO8Q_1RaMUrn8H_WZ8scOoR1',
        ],
        'cache' => 
        [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => 
        [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' =>
        [
            'errorAction' => 'site/error',
        ],
        'mailer' => 
        [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log' =>
        [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' =>
        [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) 
{
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 
    [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 
    [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
