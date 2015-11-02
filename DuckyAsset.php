<?php

namespace xj\ducky;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class DuckyAsset extends AssetBundle
{

    public $sourcePath = '@bower/ducky/lib';
    public $basePath = '@webroot/assets';
    public $js = ['ducky.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
