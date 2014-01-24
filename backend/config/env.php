<?php
/**
 * dev.php
 */

return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
            'generatorPaths' => array('backend.extensions.gii'),
        ),
	),
);