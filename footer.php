<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer();
include (__DIR__ . '/vtdevs-f2.php');
?>
<div id="vtdevseo-box-contact-bottom" style="display:none">
<div class="box-contact-bottom">
	<div class="item s-mobile-number phone-click"><a href="tel:+84888555179" class="phone-click"><div class="bottom-mobile-number mobile-counter phone-click"><div class="thumb-image phone-click"></div><div class="mobile phone-click"><p class="txt-mobile-number-hide phone-click">Gọi ngay:<br>0888.555.179</p></div></div></a></div><div class="item s-form-contact zalo-click"><a rel="nofollow noopener" target="_blank" href="https://zalo.me/0944944039" class="zalo-click"><div id="vtdevs-fix-z1" class="button-s-contact zalo-click"><i id="vtdevs-fix-z2" class="icon-message zalo-click"></i><span id="vtdevs-fix-z3" class="zalo-click">Nhắn tin Zalo</span></div></a></div>
</div></div>
<script>
setTimeout(function() {
	var optvt = document.getElementById('vtdevseo-box-contact-bottom');
	optvt.style.display = 'block';
}, 36000);
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116289681-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116289681-1');
</script>

</body>
</html>
