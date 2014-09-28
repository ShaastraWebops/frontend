<!DOCTYPE html>
<html>
	<head>
		<title>Pre Shaastra | Shaastra '15</title>
		<?php include '../base/head.php' ?>

		<style type="text/css">
			body {
				overflow-y: auto;
			}
        	.cke_button_icon.cke_button__savebtn_icon {
                width : 70px;
                background-position:right !important;
            }
            .cke_button_icon.cke_button__savebtn_icon:after {
                content:'Save';
            }
            .left
            {
            	margin-left: 100px;
            }
		</style>
	</head>
	
	<body>
		<?php include '../base/menu.php' ?>
		<div class="container-fluid white centered">
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="text-center title">PRE SHAASTRA</h1>
	                <div class="white breaker">
	                    <span class="left"></span>
	                        <div class="dice white"></div>
	                    <span class="right"></span>
	                </div>
	            </div>
	        </div>
	    </div>

		<div class="container-fluid">
			<div class="left">
						<?php 
							$data = file_get_contents('../misc/pre-shaastra3.html');
							if ( isset($_GET['edit']) ) { ?>
							<form method="post" action='../scripts/save_to_file.php'>
			                    <div class='data col-xs-12'>
			                        <input type='hidden' name='filename' value='../misc/pre-shaastra3.html' />
			                        <textarea name="data" id='data' style='min-height : 100px;'>
			                            <?php echo $data; ?>
			                        </textarea>
			                    </div>
			                </form>
		                <?php } else { ?>
			                <div class='data col-xs-12'>
			                    <?php echo $data; ?>
			                </div>
						<?php } ?>
					</div>
				</div>
					<div class="para2">
						<?php 
							$data = file_get_contents('../misc/pre-shaastra2.html');
							if ( isset($_GET['edit']) ) { ?>
							<form method="post" action='../scripts/save_to_file.php'>
			                    <div class='data2 col-xs-12'>
			                        <input type='hidden' name='filename' value='../misc/pre-shaastra2.html' />
			                        <textarea name="data" id='data2' style='min-height : 100px;'>
			                            <?php echo $data; ?>
			                        </textarea>
			                    </div>
			                </form>
		                <?php } else { ?>
			                <div class='data col-xs-12'>
			                    <?php echo $data; ?>
			                </div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php include '../base/foot.php' ?>

		<?php if ( isset($_GET['edit']) ) { // The fns to send data ?>
	    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

	    <script>
	        $(document).ready(function() {
	            CKEDITOR.inline('data')
	            CKEDITOR.inline('data2')
	            $(window).bind('keydown', function(event) {
	                if (event.ctrlKey || event.metaKey) {
	                    var letter = String.fromCharCode(event.which).toLowerCase();
	                    if ( letter == 's' ) {
	                        $('.cke_button__savebtn').click();
	                        event.preventDefault();
	                    }
	                }
	            });
	        });
	    </script>
	    <?php } ?>
	</body>
</html>
