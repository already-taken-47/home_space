<?php

$this->title = Yii::t('titles', 'account');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="account-index">
  <ul>
    <?php foreach ($items as $item) {?>
      <li><a href="<?= $item['url'] ?>"><?=$item['label'] ?></a></li>
    <?php } ?>  
  </ul>
</div>
