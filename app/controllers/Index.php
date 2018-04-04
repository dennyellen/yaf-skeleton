<?php

/*
 * This file is part of the overtrue/yaf-skeleton.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * class IndexController.
 *
 * @author overtrue <i@overtrue.me>
 */
class IndexController extends BaseController
{
    /**
     * @return string
     */
    public function handle()
    {
        $msg = Yaf\Registry::get('config');

        return 'It works! ' . $msg->app_name;
    }
}
