<?php include(THEME_DIR_PHP.'header.php'); ?>
<div class="row">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<div class="col-md-12 rounded p-3 p-md-5">
<img class="img-fluid ser" width="100%" src="<?php echo $page->coverImage(); ?>"/>
</div>
<?php endif ?>
<div class="col-md-12 p-3 p-md-5">
<h1><strong><a class="asteroid" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<?php if ($page->description()): ?>
<h2><span><?php echo $page->description(); ?></span></h2>
<?php endif ?>
<?php echo $page->content(); ?>
</div>
<?php Theme::plugins('pageEnd'); ?>
<?php include(THEME_DIR_PHP.'plugins.php'); ?>
</div>

