<?php
return array(
    //операции
    'createPage' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'editPage' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'deletePage' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'showPage' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),

    'createWork' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'editWork' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'deleteWork' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),
    'showWork' => array(
        'type' => CAuthItem::TYPE_OPERATION,
    ),

    //роли
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Гость',
        'children' => array(
        ),
    ),
    'user' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Пользователь',
        'children' => array(
        ),
    ),
    'moderator' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Модератор',
        'children' => array(
        ),
    ),
    'administrator' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор',
        'children' => array(
        ),
    ),
);