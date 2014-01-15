<?php
/**
 *
 * backend.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'backend');

// web application configuration
return array(
	'name' => 'Админка Pixelio.ru',
	'basePath' => realPath(__DIR__ . '/..'),
	// path aliases
	'aliases' => array(
		'bootstrap' => dirname(__FILE__) . '/../..' . '/common/lib/vendor/2amigos/yiistrap',
		'yiiwheels' =>  dirname(__FILE__) . '/../..' . '/common/lib/vendor/2amigos/yiiwheels'
	),

    'import' => array(
        'backend.extensions.components.*',
        'backend.components.*',
        'backend.helpers.*',
        'backend.models.*',
    ),

	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(),

	// application modules
	'modules' => array(),

	// application components
	'components' => array(

		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),

        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',
        ),

		'clientScript' => array(
			'scriptMap' => array(
				'bootstrap.min.css' => false,
				'bootstrap.min.js' => false,
				'bootstrap-yii.css' => false
			)
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,

			'rules' => array(
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		)
	),
    'params' => array(
        'adminCategories' => array(
            array(
                'title' => 'Пользователи',
                'desc' => 'В этом разделе можно управлять пользователями, менять их права, имена, пароли, явки...',
                'controller' => 'users',
            ),
//            array(
//                'title' => 'Портфолио',
//                'desc' => 'Тут вы сможете управлять вашим замечательным порфтолио. Делайте это грамотно =)',
//                'controller' => 'portfolio',
//            ),
//            array(
//                'title' => 'Простое портфолио',
//                'desc' => 'Упрощенный модуль портфолио. Подходит для лендингов. Пользуйтесь.',
//                'controller' => 'SimplePortfolio',
//            ),
//            array(
//                'title' => 'Отзывы',
//                'desc' => 'А тут мы можем управлять отзывами. Други, делайте это грамтоно, не удаляйте справедливую критику.',
//                'controller' => 'feedback',
//            ),
//            array(
//                'title' => 'Команда',
//                'desc' => 'Тут вы сможете выставить свою команду на всеообщее обозрение. Сделайте это и доверие к вам возрастет.',
//                'controller' => 'team',
//            ),
            array(
                'title' => 'Клиенты',
                'desc' => 'Список ваших клиентов и контактов, которые они оставили. Управляфте своим бизнесом прямо из админки.',
                'controller' => 'clients',
            ),
            array(
                'title' => 'Домены',
                'desc' => 'Список ваших доменов.',
                'controller' => 'domains',
            ),
            array(
                'title' => 'Темы',
                'desc' => 'Список ваших тем.',
                'controller' => 'themes',
            ),
            array(
                'title' => 'Переменные',
                'desc' => 'Используйте переменные в шаблонах. Редактируйте ваши тексты.',
                'controller' => 'vars',
            ),
            array(
                'title' => 'Уведомления',
                'desc' => 'На данный момент это получатели инфы с разных доменов по email',
                'controller' => 'notice',
            ),
        ),
    ),
);