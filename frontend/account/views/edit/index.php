<?php

use frontend\widgets\Banner;

$this->title = Yii::t('titles', 'account_edit');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="edit-index">
    <h1><?= $this->title ?></h1>
    <div class="dropzone" id="dropzone">Drop files here to upload</div>
</div>
 <?= Banner::widget();?>
<?php
$this->registerJsFile(
    'scripts/common.js',
    ['depends'=>'frontend\assets\AppAsset']
);
?>