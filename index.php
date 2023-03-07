<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php echo Theme::metaTagTitle(); ?>
<?php echo Theme::metaTagDescription(); ?>
<meta name="twitter:title" content="<?php echo $page->title(); ?>"/>
<meta name="twitter:description" content="<?php echo $page->description(); ?>"/>
<?php echo Theme::metaTagDescription(); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<?php echo Theme::css('css/bs.css'); ?>
<?php echo Theme::css('css/creative.css'); ?>
<?php Theme::plugins('siteHead'); ?>
</head>
<body>
<div class="container-fluid">
<?php Theme::plugins('siteBodyBegin'); ?>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<?php
if ($WHERE_AM_I == 'page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
}
?>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<?php Theme::plugins('siteBodyEnd'); ?>
</div>
</body>
</html>