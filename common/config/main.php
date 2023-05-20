<?php
return [
    'aliases' => [

        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => array(
        // ...
        'gii' => array(
            'class' => 'system.gii.GiiModule',
//            'password' => 'your_password',
            // If you want to use Gii in a production environment, you should restrict access to it by IP
//            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        // ...
    ),
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
