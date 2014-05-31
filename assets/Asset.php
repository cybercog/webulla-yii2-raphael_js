<?php
/**
 * Created by PhpStorm.
 * User: supreme
 * Date: 16.04.14
 * Time: 0:59
 */

namespace wbl\raphael\assets;

use yii\web\AssetBundle;
use yii\web\View;

class Asset extends AssetBundle {

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@wbl/raphael/public';

	/**
	 * @inheritdoc
	 */
	public $js = [
		'js/raphael.js',
		'js/g.raphael.js',
		'js/g.dot.js',
		'js/g.line.js',
		'js/g.bar.js',
		'js/g.pie.js',
	];

	/**
	 * @inheritdoc
	 */
	public $depends = [
		'yii\web\JqueryAsset',
	];
}