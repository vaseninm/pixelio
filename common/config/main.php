<?php
/**
 *
 * main.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'language' => 'ru',
	'preload' => array('log'),
	'aliases' => array(
		'frontend' => dirname(__FILE__) . '/../..' . '/frontend',
		'api' => dirname(__FILE__) . '/../..' . '/api',
		'common' => dirname(__FILE__) . '/../..' . '/common',
		'backend' => dirname(__FILE__) . '/../..' . '/backend',
		'console' => dirname(__FILE__) . '/../..' . '/console',
		'vendor' => dirname(__FILE__) . '/../..' . '/common/lib/vendor',
		'root' => dirname(__FILE__) . '/../../..' . ''
	),
	'import' => array(
		'common.extensions.components.*',
		'common.components.*',
		'common.helpers.*',
		'common.models.*',
		'application.controllers.*',
		'application.extensions.*',
		'application.components.*',
		'application.helpers.*',
		'application.models.*',
		'vendor.2amigos.yiistrap.helpers.*',
		'vendor.vernes.yiimailer.YiiMailer',
	),
	'components' => array(
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class'  => 'CLogRouter',
			'routes' => array(
				array(
					'class'        => 'CDbLogRoute',
					'connectionID' => 'db',
					'levels'       => 'error, warning',
				),
			),
		),
		'authManager' => array(
			'class' => 'PxPhpAuthManager',
		),
		'user'=>array(
			'class' => 'PxWebUser',
		),
	),
	'params' => array(
		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone'       => 'UTC',
		'frontendUrl' => '/',
		'apiUrl' => '/api',
		'adminUrl' => '/admin',
		'backendUrl' => 'http://pliv.ru/backend',
		'author' => 'Affiche',
		'since' => '2013',
		'adminEmail' => 'vaseninm@gmail.com',
		'YiiMailer' => include __DIR__ . '/mail.php',
	)
);