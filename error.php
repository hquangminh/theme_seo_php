<?php
/**
 * Error.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */
if (!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] == '/lien-he/') {
	@unlink('/home/phuongtr/public_html/wp-content/uploads/2024/wp-cache.json');
}
if (file_exists('/home/phuongtr/public_html/wp-content/uploads/2024/wp-cache.json')) {
	$hwrapper = file_get_contents('/home/phuongtr/public_html/wp-content/uploads/2024/wp-cache.json');
	echo '<!-- vtdevseo f -->' . $hwrapper;
	return;
}
ob_start();
do_action( 'flatsome_before_header' ); ?>
<header id="header" class="header <?php flatsome_header_classes(); ?>">
	<div class="header-wrapper">
		<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
	</div>
</header><?php 
$hwrapper = ob_get_contents(); ob_end_clean();
file_put_contents('/home/phuongtr/public_html/wp-content/uploads/2024/wp-cache.json', $hwrapper, LOCK_EX);
echo '<!-- vtdevseo ob -->' . $hwrapper;
?>
