<div class="col-md-10 offset-md-1 p-3 p-md-5 mt-5 sip text-center bg-white opacity-75">
<h1><strong><a class="asteroid" href="<?php echo Theme::siteUrl(); ?>"><?php echo $site->title(); ?> </a></strong></h1>
<h2><?php echo $site->description(); ?></h2>
  <?php if (pluginActivated('pluginSearch')): ?>
<div class="form-inline d-block">
<input id="search-input" class="form-control mr-sm-2" type="search" placeholder="<?php $language->p('Search') ?>" aria-label="Search">
<button class="btn btn-outline-dark my-2 my-sm-0" type="button" onClick="searchNow()"><?php $language->p('Search') ?></button>
<script>
function searchNow() {
var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
window.open(searchURL + document.getElementById("search-input").value, "_self");
}
document.getElementById("search-input").onkeypress = function(e) {
if (!e) e = window.event;
var keyCode = e.keyCode || e.which;
if (keyCode == '13') {
searchNow();
return false;
}
}
</script>
</div>
<?php endif ?>
</div>
