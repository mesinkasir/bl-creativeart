<?php include(THEME_DIR_PHP.'header.php'); ?>
<?php include(THEME_DIR_PHP.'404.php'); ?>
<div class="row">
<div class="col-md-12 p-3 text-center">
<h3 class="display-4 mt-5 mb-3">- Update Art -</h3>
</div>
<?php foreach ($content as $page): ?>
<?php Theme::plugins('pageBegin'); ?>
<div class="col-md-4 p-3 p-md-5 text-center">
<?php if ($page->coverImage()): ?>
<a title="<?php echo $page->title(); ?>" href="<?php echo $page->permalink(); ?>">
<img class="img-fluid dark" alt="<?php echo $page->title(); ?>" width="100%" height="100%" src="<?php echo $page->coverImage(); ?>"/>
</a>
<?php endif ?>
</div>
<?php Theme::plugins('pageEnd'); ?>
<?php endforeach ?>
</div>
<?php include(THEME_DIR_PHP.'pagination.php'); ?>
<?php include(THEME_DIR_PHP.'plugins.php'); ?>
