<?php

// shared application configuration
return array(
	'basePath' => realpath(__DIR__ . '/..'),

	// application name
	'name' => 'kinozal v3',

	// application language
	'language' => 'ru',

    'charset' => 'utf-8',

	// path aliases
	'aliases' => array(
        'app' => 'application',
        'vendor' => '../vendor',
	),

	// components to preload
	'preload' => array('log'),

	// paths to import
    'import' => array(
        'application.helpers.*',
        'application.models.ar.*',
        'application.models.form.*',
        'application.components.*',
        'vendor.nordsoftware.yii-emailer.models.*',
    ),

	// application components
	'components' => array(
		// uncomment the following to enable the email extension
        'emailer' => array(
            'class' => 'vendor.nordsoftware.yii-emailer.components.Emailer',
            'defaultLayout' => 'application.views.layouts.email',
            'data' => array(
                'h1Style' => 'font-size: 38.5px; line-height: 40px; margin: 0 0 10px; font-weight: bold; text-rendering: optimizelegibility;',
                'linkStyle' => 'color: #0088CC; text-decoration: none',
            ),
            'templates' => array(
            ),
        ),
		'db' => array(
            'tablePrefix' => '',
			'connectionString' => 'mysql:host=localhost;dbname=kino_v3',
			'username' => 'kino_front',
			'password' => 'hsM7Afx5ym4dMjQt',
			'enableProfiling' => YII_DEBUG,
			'enableParamLogging' => YII_DEBUG,
			'charset' => 'utf8',
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
        'format' => array(
            'class' => 'vendor.crisu83.yii-formatter.components.Formatter',
            'formatters' => array(
            ),
        ),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),
	),

	// application parameters
	'params' => array(
		'adminEmail' => 'webmaster@example.com',
	),
);