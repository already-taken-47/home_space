<?php

namespace frontend\account\controllers;

use yii;
use yii\web\Controller;
use yii\helpers\Url;

class AccountController extends Controller
{
    public function actionIndex()
    {    
        return $this->render('index', [
            'items' => $this->menuItems(),
        ]);
    }

    private function menuItems()
    {
    	$menuItems = array(

    		'0' => array('label' => 'Edit', 'url' => Yii::$app->urlManager->createUrl(['account/edit'])),

    	);
    	return $menuItems;
    }
}
