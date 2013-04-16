<?php

// development environment configuration
return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'gii_pass',
			'ipFilters' => array('127.0.0.1','::1','83.172.21.*','83.172.20.*'),
		),
	),
    'components' => array(
        'db' => array(
            'enableProfiling' => true,
            'enableParamLogging' => true,
        ),
    ),
);

