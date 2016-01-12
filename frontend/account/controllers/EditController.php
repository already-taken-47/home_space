<?php

namespace frontend\account\controllers;

use yii;
use yii\web\Controller;

class EditController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpload()
    {

        if (isset($_FILES['file'])) {

			$file = $_FILES['file'];
            $temp = explode("/", $file['type']);

            if($temp[1] == 'png' || $temp[1] == 'jpeg'){
            	$path = Yii::getAlias('@media').'/';
            	$ext = '.'.$temp[1];
            	$name = rand(1, 1000);
            	move_uploaded_file ( $file['tmp_name'] , $path.$name.$ext );
                echo $path.$name.$ext;
            }
        }
    }
}
