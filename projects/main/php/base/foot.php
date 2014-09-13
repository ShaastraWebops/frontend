
<!-- Javascript -->
<script>
		jsCache.load( 
				<?php if ($DEBUG) { ?>
						//{url: '../../js/modernizr.min.js'},
						{url: '../../js/bootstrap.min.js'}
				<?php } else { ?>
						//{url: '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js'},
						{url: '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'}
				<?php } ?>
		)
</script>

<script>
	$(document).ready(function() {
		// $('a[href*=#]:not([href=#])').click(function() {
		// 	var $el = $(this);
		// 	if ( $el.data('toggle') !== "" )
		// 		return;
		// 	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		// 		var target = $(this.hash);
		// 		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		// 		if (target.length) {
		// 			$('html,body').animate({
		// 					scrollTop: target.offset().top
		// 			}, 1000);
		// 			return false;
		// 		}
		// 	}
		// });
	});
</script>
