<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Watching Now',

	// preloading 'log' component
	'preload'=>array('log'),
	'behaviors'=>array(
		'runEnd'=>array(
			'class'=>'application.components.WebApplicationEndBehavior',
		),
	),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'edv01',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'swiftMailer' => array(
			'class' => 'ext.swiftMailer.SwiftMailer',
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		// 'db'=>array(
			// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		// uncomment the following to use a MySQL database
		 'sourceLanguage'=>'en',
		'language'=>'ru',
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=watching',
			'emulatePrepare' => true,
			'username' => 'u_watching',
			'password' => 'isWrFNIL',
			'charset' => 'utf8',
		),
		'authManager'=>array(
            'class'=>'PhpAuthManager',
            'defaultRoles' => array('guest'),
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'user'=>array(
			'class' => 'WebUser',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);