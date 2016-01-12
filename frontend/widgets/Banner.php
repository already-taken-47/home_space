<?php
namespace frontend\widgets;

use yii;
use frontend\models\Language;
use frontend\models\Publicity;

class Banner extends \yii\bootstrap\Widget
{
    public function init(){}

    public function run() {

		$query = Publicity::find();
		$publicity = $query->all();
        return $this->render('banner/view', ['publicity' => $publicity]);
    }
}