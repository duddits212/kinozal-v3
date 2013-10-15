<?php

// web application configuration
return array(
    'aliases' => array(
        'bootstrap' => 'vendor.yii-twbs.yiistrap',
        'yiiwheels' => 'vendor.2amigos.yiiwheels',
    ),

	// application behaviors
	'behaviors' => array(
		// uncomment this if your application is multilingual
		/*
		'multilingual' => array(
			'class' => 'vendor.crisu83.yii-multilingual.components.MlApplicationBehavior',
			'languages' => array( // enabled languages (locale => language)
				'en' => 'English',
			),
		),
		*/
	),

    'import' => array(
        'application.modules.user.models.*',
        'bootstrap.helpers.TbHtml',
    ),

	// controllers mappings
	'controllerMap' => array(
		// uncomment the following if you enable the image component
		'image' => array('class' => 'vendor.crisu83.yii-image.controllers.ImageController'),
	),

	// application modules
	'modules' => array(

        'gii' => array(
            'generatorPaths' => array('bootstrap.gii'),
        ),

		// uncomment the following to enable the auth module
        /*
		'auth' => array(
			'class' => 'vendor.crisu83.yii-auth.AuthModule',
            'userClass' => 'Users', // the name of the user model class.
            'userIdColumn' => 'id', // the name of the user id column.
            'userNameColumn' => 'username', // the name of the user name column.
		),
        */
        'user' => array(
            'debug' => false,
            'userTable' => 'user',
            'translationTable' => 'translation',
        ),
        'usergroup' => array(
            'usergroupTable' => 'usergroup',
            'usergroupMessageTable' => 'user_group_messages',
        ),
        'membership' => array(
            'membershipTable' => 'memberships',
            'paymentTable' => 'payments',
        ),
        'friendship' => array(
            'friendshipTable' => 'friendships',
        ),
        'profile' => array(
            'privacySettingTable' => 'privacysettings',
            'profileFieldTable' => 'profile_fields',
            'profileTable' => 'profiles',
            'profileCommentTable' => 'profile_comments',
            'profileVisitTable' => 'profile_visits',
        ),
        'registration' => array(
            'registrationUrl'  => array('//registration/registration/registration'),
            'registrationView' => array('/views/registration'),
        ),
        'role' => array(
            'roleTable' => 'role',
            'userRoleTable' => 'user_roles',
            'actionTable' => 'actions',
            'permissionTable' => 'permissions',
        ),
        'message' => array(
            'messageTable' => 'messages',
        ),

        'comments'=>array(
            //you may override default config for all connecting models
            'defaultModelConfig' => array(
                //only registered users can post comments
                'registeredOnly' => true,
                'useCaptcha' => false,
                //allow comment tree
                'allowSubcommenting' => true,
                //display comments after moderation
                'premoderate' => false,
                //action for postig comment
                'postCommentAction' => 'comments/comment/postComment',
                //super user condition(display comment list in admin view and automoderate comments)
                'isSuperuser'=>'false',
                //order direction for comments
                'orderComments'=>'ASC',
            ),
            //the models for commenting
            'commentableModels'=>array(
                'Movie',
            ),
            'userConfig'=>array(
                'class'=>'User',
                'nameProperty'=>'username',
                'emailProperty'=>'email',
            ),
        ),
	),

	// application components
	'components' => array(
		// uncomment the following if you enable the auth module
        /*
		'authManager'=>array(
			'class'=>'auth.components.CachedDbAuthManager',
			'itemTable'=>'authitem',
			'itemChildTable'=>'authitemchild',
			'assignmentTable'=>'authassignment',
			'behaviors'=>array(
				'auth'=>array(
					'class'=>'auth.components.AuthBehavior',
					'admins'=>array('admin'),
				),
			),
		),
        */
        'cache' => array('class' => 'system.caching.CDummyCache'),
		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),
		// uncomment the following to enable the image extension
		'image' => array(
			'class' => 'vendor.crisu83.yii-image.components.ImageManager',
			'versions' => array(
			),
		),
        /*
		'less' => array(
			'class' => 'vendor.crisu83.yii-less.components.Less',
			'mode' => 'client',
			'options' => array(
				'env' => 'development',
			),
			'files' => array(
				'less/main.less' => 'css/main.css',
				'less/responsive.less' => 'css/responsive.css', // should be compiled separately
			),
		),
        */
		'urlManager' => array(
			// uncomment the following if you application is multilingual
			//'class' => 'vendor.crisu83.yii-multilingual.components.MlUrlManager','
			// uncomment the following if you have enabled Apache's Rewrite module.
            /*
			'urlFormat' => 'path',
			'showScriptName' => false,
            */
			'rules' => array(
				// language rules
				'<lang:([a-z]{2}(?:_[a-z]{2})?)>/<route:[\w\/]+>'=>'<route>',
				// seo rules
				'<controller:\w+>/<name>-<id:\d+>.html'=>'<controller>/view',
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			// uncomment the following if you enable the Auth module
//			//'class'=>'auth.components.AuthWebUser',
            'class' => 'application.modules.user.components.YumWebUser',
			'allowAutoLogin' => true,
            'loginUrl' => array('/user/user/login'),
		),
        /*
        'User' => array(
            'class' => 'User',
        ),
        */
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
        'log' => array(
            'routes' => array(
                array(
                    'class' => 'vendor.malyshev.yii-debug-toolbar.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array('127.0.0.1', '83.172.21.*', '83.172.20.*', '::1'),
                ),
            ),
        ),
	),
);