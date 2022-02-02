<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'admin' => [
                'class' => 'mdm\admin\Module',
       
                ]
   
                ],
    
    'components' => [
        'authManager' => [
                         'class' => 'yii\rbac\DbManager', // or use 
                    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            
        'identityClass' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
              ],
    ],
];
