<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-animate
 * @license BSD-3-Clause
 * @package yii2-animate
 * @version 1.0.4
 */

namespace cinghie\animate;

use yii\web\AssetBundle;

/**
 * Full (non-minified) Animate.css asset bundle.
 *
 * Prefer {@see AnimateMinifyAsset} in production.
 */
class AnimateAsset extends AssetBundle
{
	/**
	 * {@inheritdoc}
	 */
	public $sourcePath = '@bower/animate.css';

	/**
	 * {@inheritdoc}
	 */
	public $css = [
		'animate.css',
	];

	/**
	 * Publish only the CSS entry used by this bundle (skip docs / source / lockfiles).
	 *
	 * {@inheritdoc}
	 */
	public $publishOptions = [
		'only' => [
			'animate.css',
		],
	];

	/**
	 * {@inheritdoc}
	 */
	public $depends = [];
}
