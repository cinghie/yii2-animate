<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-animate
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-animate
 * @version 1.0.0
 **/

namespace cinghie\animate;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class AnimateMinifyAsset
 */
class AnimateMinifyAsset extends AssetBundle
{
    /**
     * @inherit
     */
     public $sourcePath = '@bower/animate.min.css';

    /**
     * @inherit
     */
    public $css = [
	    'animate.min.css'
    ];


    /**
     * @inherit
     */
	public $depends = [
		YiiAsset::class,
		BootstrapAsset::class,
		BootstrapPluginAsset::class
    ];
}
