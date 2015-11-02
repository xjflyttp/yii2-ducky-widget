<?php

namespace xj\ducky;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class DuckyAsset extends AssetBundle
{

    public $sourcePath = '@bower/ducky';
    public $basePath = '@webroot/assets';
    public $js = ['lib/ducky.browser.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
