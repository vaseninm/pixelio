<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 02.09.13
 * Time: 1:22
 * To change this template use File | Settings | File Templates.
 */

class PxAngularController extends PxController
{

    public function init()
    {
        parent::init();
        Domains::current();
        Clients::register();
    }

}