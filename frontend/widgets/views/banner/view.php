<div class="banners">
    <h3>Реклама</h3>
	<?php foreach ($publicity as $value) { ?>
    <div>
    	<a href="<?= $value->link ?>">
    	<img src="<?= $value->image ?>">
    	</a>
    	<h4><?= $value->title ?></h4>
    </div>
    <br />
    <br />
    <?php } ?>
</div>