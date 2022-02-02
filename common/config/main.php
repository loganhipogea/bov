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
       
                ],
        'attachments' => [
		'class' => nemmo\attachments\Module::className(),
		'tempPath' => '@app/uploads/temp',
		'storePath' => '@app/uploads/store',
		'rules' => [ // Rules according to the FileValidator
		    'maxFiles' => 10, // Allow to upload maximum 3 files, default to 3
			'mimeTypes' => 'image/png', // Only png images
			'maxSize' => 1024 * 1024 // 1 MB
		],
		'tableName' => '{{%attachments}}' // Optional, default to 'attach_file'
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
       // 'class'=> 'mdm\admin\models\User',
        'identityClass' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
              ],
    ],
];
