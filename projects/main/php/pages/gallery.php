<html>
	<head>
		<?php
			if ( isset($_REQUEST['title']) ) {
				$title = $_REQUEST['title'];
			} else {
				$title = 'Gallery';
			}

			if ( isset($_REQUEST['type']) ) {
				$type = $_REQUEST['type'];
			} else {
				show404();
			}
		?>
		<title>Gallery | Shaastra '15</title>
		
		<?php include '../base/head.php' ?>
		<link rel="stylesheet" type="text/css" href="../../css/blueimp-gallery.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap-gallery.min.css">
	</head>
	<body>
		
		<?php
			// Possible types of gallery : facebook, google drive, foldername, dropbox
			echo $type;
			if ($type == 'facebook' || $type == 'fb') {
				/* Facebook
				 Example album id : 123445064367882
				 1. Open a facebook album. Example url : https://www.facebook.com/media/set/?set=a.123445064367882.12691.105321269513595&type=3
				 2. Take the first number after a. till the next <dot>
				 3. Save this as facebook album id and pass it here. */
				
				if ( isset($_REQUEST['id']) ) {
					$fbid = $_REQUEST['id'];
					$url = 'https://graph.facebook.com/' . $fbid . '/photos';
				} else {
					include '../pages/404.php';
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
				} else {
					$img_list = scandir($folder_name);
		?>
			<script>
				img_list = [
		<?php
					foreach ($img_list as $img) {
						if ( $img === '.' || $img === '..' ) continue;
						if ( endsWith($img, '.jpg') || endsWith($img, '.png') || endsWith($img, '.gif') || endsWith($img, '.bmp') || endsWith($img, '.jpeg') || endsWith($img, '.svg') ) {
							echo '\'' . $folder_name . '/' . $img . '\',';
						}
					}
		?>
				];
			</script>
		<?php
				}
			}
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php include '../base/menu.php' ?>
		
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
		
		<div id="links">
			
		</div>
		
		
		
		
		
		
		
		<?php include '../base/foot.php' ?>
		<script>
			$(document).ready(function() {
				console.log(img_list.length);
				$.each(img_list, function( i, val ) {
					$img = $('<a></a>').addClass('img')
						.prop('href', val)
						.append($('<img>').prop('src', val))
						.attr('data-gallery', '');
					$('#links').append($img);
				});
				blueimp.Gallery(
				    document.getElementById('links').getElementsByTagName('a'),
				    {
				        container: '#blueimp-gallery-carousel',
				        carousel: true
				    }
				);
			});

		</script>
		<script src="../../js/blueimp-gallery.min.js"></script>
		<script src="../../js/bootstrap-gallery.min.js"></script>
		
	</body>
</html>
