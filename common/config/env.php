<?php
/**
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
		),
	),
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=lp',
			'username' => 'root',
			'password' => '88148814',
			'enableProfiling' => false,
			'enableParamLogging' => false,
			'charset' => 'utf8',
		),
		'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CWebLogRoute',
					'categories'=>'system.db.*',
                ),
            ),
        ),
	),
	'params' => array(
		'yii.handleErrors'   => true,
		'yii.debug' => true,
		'yii.traceLevel' => 3,
    )
);
