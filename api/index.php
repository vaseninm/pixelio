<?php
/**
 *
 * Bootstrap index file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
require('./../application/common/lib/vendor/autoload.php');

Yiinitializr\Helpers\Initializer::create('./../application/api', 'api', array(
	__DIR__ .'/../application/common/config/main.php',
	__DIR__ .'/../application/common/config/env.php',
	__DIR__ .'/../application/common/config/local.php',
	'main',
	'env',
	'local'
))->run();