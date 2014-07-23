
<!-- Javascript -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js' type='text/javascript'></script>
<script>
	$(document).ready(function() {
        typeof($.fn.modal) === 'undefined' || $('body').append('<script src="../../js/bootstrap.min.js">\x3C/script>');
	    window.Modernizr || $('body').append('<script src="../../js/modernizr.min.js">\x3C/script>');
    });
</script> -->

<?php if ($DEBUG) { ?>
    <script src="../../js/bootstrap.min.js"></script>
    <script src='../../js/modernizr.min.js' type='text/javascript'></script>
<?php } else { ?>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js' type='text/javascript'></script>
<?php } ?>

<script>

	$(document).ready(function() 
	{
	
  		$('a[href*=#]:not([href=#])').click(function() {
    			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      				var target = $(this.hash);
      				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      				if (target.length) {
	        			$('html,body').animate({
          					scrollTop: target.offset().top
        				}, 1000);
        				return false;
      				}
    			}
  		});
	});
</script>
