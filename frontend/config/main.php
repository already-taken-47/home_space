<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'frontend\components\LangUrlManager',
            'rules' => [
                '/' => 'site/index',
                '<controller:\w+>/<action:\w+>/'=>'<controller>/<action>',
            ],
        ],
        'assetManager' => [
             'basePath' => '@webroot/assets',
             'baseUrl' => '@web/assets'
        ],
        'request' => [
            'baseUrl' => '',
            'class' => 'frontend\components\LangRequest'
        ],
        'language'=>'ru-RU',
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/language',
                    'sourceLanguage' => 'ru',
                    'fileMap' => [
                        'main' => 'main.php',
                        'titles' => 'titles.php',
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'account' => [
            'class' => 'frontend\account\Account',
        ],
    ],
];
