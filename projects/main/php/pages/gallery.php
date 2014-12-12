<?php include '../../php/base/logmein.php'; ?>
<html>
    <head>
        <?php
            if ( isset($_REQUEST['title']) ) {
                $title = $_REQUEST['title'];
            } else {
                $title = 'Gallery';
            }
	    if ( isset($_REQUEST['iframe']) ) {
                $iframe = 1;
            } else {
                $iframe = 0;
            }

            if ( isset($_REQUEST['type']) ) {
                $type = $_REQUEST['type'];
            } else {
                show404();
            }
        ?>  
        <title>Gallery | Shaastra 2015</title>
        <meta name="keywords" content="gallery,shaastra gallery,shaastra galley 2015">
        <meta name="robots" content="NOODP">
        <?php include '../../php/base/head.php' ?>
        <link rel="stylesheet" type="text/css" href="../../css/blueimp-gallery.css">
        <link rel="stylesheet" type="text/css" href="../../css/blueimp-gallery-indicator.css">
        <link rel="stylesheet" type="text/css" href="../../css/blueimp-gallery-video.css">
    </head>
    <body>

        <?php
            // Possible types of gallery : facebook, google drive, foldername, dropbox
            if ($type == 'facebook') {
                /* Facebook
                 Example album id : 123445064367882
                 1. Open a facebook album. Example url : https://www.facebook.com/media/set/?set=a.123445064367882.12691.105321269513595&type=3
                 2. Take the first number after a. till the next <dot>
                 3. Save this as facebook album id and pass it here. */

                if ( isset($_REQUEST['id']) ) {
                    $fbid = $_REQUEST['id'];
                    $url = 'https://graph.facebook.com/' . $fbid . '/photos';
                } else {
                    include '../../php/pages/404.php';
                    die();
                }
            } elseif ($type == 'folder') {
                /* Local Folder
                 Example filename : ../../img/yaay/
                 1. This needs knowledge of server.*/
                if ( isset($_REQUEST['folder_name'])) {
                    $folder_name = $_REQUEST['folder_name'];
                } else {
                    show404();
                }
                if ( !is_dir($folder_name)) {
                    show404();
                }
            }
        ?>

        <?php
        include '../../php/base/menu.php';
        if (isset($iframe) && $iframe ) {
	?>

        <div class="container-fluid white centered" style="margin-bottom:2%">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title"><?php echo $title; ?></h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-xs-8 col-xs-offset-2">
        	        <!-- Zoomed Image Browser - Lightbox -->
			        <div id="blueimp-gallery" class="blueimp-gallery">
			            <!-- The container for the modal slides -->
			            <div class="slides"></div>
			            <!-- Controls for the borderless lightbox -->
			            <h3 class="title"></h3>
			            <a class="prev">‹</a>
			            <a class="next">›</a>
			            <a class="close">×</a>
			            <a class="play-pause"></a>
			            <ol class="indicator"></ol>
			            <!-- The modal dialog, which will be used to wrap the lightbox content -->
			            <div class="modal fade">
				            <div class="modal-dialog">
				                <div class="modal-content">
					               <div class="modal-header">
				    	                <button type="button" class="close" aria-hidden="true">&times;</button>
				        	            <h4 class="modal-title"></h4>
				            	   </div>
				                	<div class="modal-body next"></div>
					                <div class="modal-footer">
					                    <button type="button" class="btn btn-default pull-left prev">
						                    <i class="glyphicon glyphicon-chevron-left"></i>
						                    Previous
					                    </button>
					                    <button type="button" class="btn btn-primary next">
						                    Next
						                    <i class="glyphicon glyphicon-chevron-right"></i>
				        	            </button>
				                	</div>
				            	</div>
				        	</div>
				    	</div>
		       		</div>
		   	        <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
			        <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
			            <div class="slides"></div>
			            <h3 class="title"></h3>
			            <a class="prev">‹</a>
			            <a class="next">›</a>
			            <a class="play-pause"></a>
			            <ol class="indicator"></ol>
			        </div>
			        <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
					<div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel">
			    		<div class="slides"></div>
			    		<h3 class="title"></h3>
			    		<a class="prev">‹</a>
			    		<a class="next">›</a>
			    		<a class="play-pause"></a>
					</div>
				</div>
			</div>


			<div class="row">
	    		<div class="col-xs-8 col-xs-offset-2">
			    	<h2 class="title text-center">Image gallery</h2>
					<!-- The container for the list of example images -->
					<div id="links" class="links"></div>
					<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
					<div id="blueimp-gallery" class="blueimp-gallery">
					    <div class="slides"></div>
					    <h3 class="title"></h3>
					    <a class="prev">‹</a>
					    <a class="next">›</a>
					    <a class="close">×</a>
					    <a class="play-pause"></a>
					    <ol class="indicator"></ol>
					</div>
				</div>
			</div>
		</div>

        <?php include '../../php/base/foot.php' ?>
        <script>
        	img_list = {
        		'big': [],
        		'small': [],
        		'title': []
        	};
            $(document).ready(function() {
<?php if ( $type == 'facebook') { ?>
				$.ajax({
					url: '<?php echo $url; ?>'
				}).done(function(response) {
					fb_images = response.data;
					console.log(response.data)
					for (var name in fb_images) {
    					console.log(fb_images[name]);
    					img_list.big.push(fb_images[name]['images'][0]['source']);
    					img_list.small.push(fb_images[name]['images'][fb_images[name]['images'].length-1]['source']);
    					img_list.title.push(fb_images[name]['name']);
					}
<?php } elseif ( $type == "folder" ) {
	$img_list = scandir($folder_name);

    foreach ($img_list as $img) {
        if ( $img === '.' || $img === '..' ) continue;
        if ( endsWith($img, '.jpg') || endsWith($img, '.png') || endsWith($img, '.gif') || endsWith($img, '.bmp') || endsWith($img, '.jpeg') || endsWith($img, '.svg') ) {
            echo 'img_list.big.push(\'' . $folder_name . '/' . $img . '\');';
            echo 'img_list.small.push(\'' . $folder_name . '/' . $img . '\');';
            echo 'img_list.title.push("");';
        }
    }
} ?>
             	var count = img_list.length;
             	console.log(count);
             	for ( var i = 0; i < Math.max(img_list.big.length, img_list.small.length); i++) {
                 	$img = $('<a></a>').addClass('img')
                     	.prop('href', img_list.big[i])
                     	.append($('<img>').prop('src', img_list.small[i]).css({"max-height":"200px", "max-width":"200px"}))
                     	.attr('data-gallery', '')
                     	//.prop('title', img_list.title[i])
                 	$('#links').append($img);

                }
                blueimp.Gallery( document.getElementById('links').getElementsByTagName('a'), {
               	 	container: '#blueimp-gallery-carousel',
                	carousel: true
            	});
<?php if ( $type == "facebook" ) { ?>
				}) // End ajax
<?php } ?>
            });
		</script>
        <script src="../../js/blueimp-helper.js"></script>
        <script src="../../js/blueimp-gallery.js"></script>
        <script src="../../js/blueimp-gallery-fullscreen.js"></script>
        <script src="../../js/blueimp-gallery-indicator.js"></script>
        <script src="../../js/blueimp-gallery-video.js"></script>
        <script src="../../js/blueimp-gallery-vimeo.js"></script>
        <script src="../../js/blueimp-gallery-youtube.js"></script>

        <script src="../../js/blueimp-gallery.js"></script>

    </body>
</html>
