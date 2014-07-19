
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../base/head.php' ?>
	<style>
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
	  		/*background-color:#F28A02;*/
	  		background-image:url(../../img/icons/arrow.png);
		  	background-size:20px 9px;
		  	background-repeat:no-repeat;
		  	background-position:bottom center;
	  	}
	  	.navbar-inverse .navbar-nav>li>a{
	  		font-size:125%;
	  		text-transform: none;
            font-weight: bold;
            color:#cccccc;
	  	}
	  	.navbar-nav>li>a:hover{
	  		background-color:#F2A62C;
            color:#ffffff;
	  	}
	  	.navbar-nav>li{
	  		border-bottom:thick solid #777;
	  	}
	  	.navbar-nav>li:hover{
	  		border-bottom:thick solid #09E65A;
	  	}
	  	.navbar-nav>li.active{
	  		border-bottom:thick solid #00A3E8;
	  	}
	  	.cke_button_icon.cke_button__savebtn_icon {
	  		width : 70px;
            background-position:right !important; 
	  	}
        .cke_button_icon.cke_button__savebtn_icon:after {
            content:'Save';
        }
        .main-content .data {
            background-color : #888888;
            background-color : rgba(0, 0, 0, 0.5);
            border : 2px solid #dddddd;
            padding : 10px;
            border-radius : 10px;
            color : #ffffff;
        }
	</style>
</head>

<body class=''>
	<?php 
		if ( isset($_REQUEST['category']) ) {
			$category = $_REQUEST['category'];
			$category_path = '../events/' . $category ;
		}
		if ( isset($_REQUEST['event']) ) {
            $event = $_REQUEST['event'];
            $event_path = $category_path . '/' . $event;
        }
        if ( isset($_REQUEST['tab']) ) {
            $tab = $_REQUEST['tab'];
            $tab_path = $event_path . '/' . $tab . '.html';
        }

        if ( isset($_REQUEST['edit']) ) {
            $editable = 1;
        } else {
        	$editable = 0;
        }
		if (!file_exists($tab_path)) {
			$fp = fopen("sample.html", "w"); fclose($fp);
			$data = '';
		} else {
			$data = file_get_contents($tab_path);
		}

		if ($editable && $data == '') { // empty file, show help
			$data = file_get_contents('../events/sample.html');
		}
	?>	
    <?php include '../base/menu.php'; ?>
	
	<!-- TABBAR -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" data-size='big'>
      	<div class="container-fluid" style='padding:0px 10%;'>
        	<div class="navbar-header" >
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand title" href=''><?php echo $event; ?></a>
        	</div>
        	<div class="navbar-collapse collapse">
          		<ul class="nav navbar-nav">
          			<?php 
      			    if ($dir_event_handle = opendir($event_path)) {
                        while(false !== ($file = readdir($dir_event_handle))) {
                            if ( '.' === $file ) continue;
                            if ( '..' === $file ) continue;
                            $filetab = str_replace('.html', '', $file);
                    ?>
                            <li class="default <?php if ($file == $tab . '.html') echo 'active'; ?>" >
                           		<a href="<?php if ($editable) 
                           				echo 'javascript:void(0)';
                           			else
                           				echo '?category=' . urlencode($category) . '&event=' . urlencode($event) . '&tab=' . urlencode($filetab);
                           			?>"
                           			<?php if ($editable)
                           				echo 'onclick="tab_name_edit(this)"';
                           			?>
                           			>
                               		<?php echo $filetab; ?>
                               	</a>
                            </li>
                    <?php
                        }
                        closedir($dir_event_handle);
                    }
                    ?>
            		<?php if ($editable) { ?>
            			<li class="default"><a href="javascript:void(0)" onclick='tab_name_edit(this);' class='newtab'>+</a></li>
            		<?php } ?>
          		</ul>
        	</div>
      	</div>
    </div>
	<!-- / TABBAR -->

	<?php if ( $editable ) { // Modal used as form ?> 
	<!-- EDITABLE MODAL -->
	<div class="modal container-fluid fade" id='edit_modal'>
	  	<div class="modal-dialog black" style='width : 80%'>
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">
	        			<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	        		</button>
	        		<h4 class="modal-title">Tab Properties</h4>
	      		</div>
	      		<div class="modal-body">
        			<div class='container-fluid rename'>
                        <div class='row'>
                            <div class='col-md-3' style='border-right : solid 2px #dddddd'>
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                        <h3>Delete Tab</h3>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12 text-center' style='padding-top:10px;'>
                                        If you delete a tab, all content will be deleted ! <br />
                                        <br />
                                        <a class='deleteurl btn btn-md btn-primary' href=''>Delete it</a> if you're sure.
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3' style='border-right : solid 2px #dddddd'>
                                <form action='../scripts/rename_file.php' method='POST'>
                                    <div class='row'>
                                        <div class='col-md-12 text-center'>
                                            <h3>Rename Tab</h3>
                                        </div>
                                    </div>
                                    <div class='row' style='padding-top:10px;'>
                                        <div class='col-md-5 black'>Old name</div>
                                        <div class='col-md-7'>  
                                            <input class='oldname' name='oldname' style='width:100%' type='text' value='' readonly/>
                                        </div>
                                    </div>
                                    <div class='row' style='padding-top:10px;'>
                                        <div class='col-md-5'>New name</div>
                                        <div class='col-md-7'>  
                                            <input class='newname' name='newname' style='width:100%' type='text' value=''/>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 text-center' style='padding-top:10px;'>
                                            <input type="submit" class="btn btn-md btn-primary" value='Change Name' name='submit' />
                                        </div>
                                    </div>
                                
                                    <input class='dirname' name='dirname' type='hidden' value='' />
                                </form>
                            </div>
                            <!-- <div class='col-md-3' style='border-right : solid 2px #dddddd'>
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                        <h3>Set Order</h3>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12 text-center' style='padding-top:10px;'>
                                        Change the location of this type by setting the priority using a number.<br />
                                        The tab with priority 1 will be on the left most. priority 1 will also be visible by default.<br />
                                        <br />
                                        <form action='../scripts/rename_file.php' method='POST'>
                                            <div class='row'>
                                                <div class='col-md-12 text-center'>
                                                    <h3>Rename Tab</h3>
                                                </div>
                                            </div>
                                            <div class='row' style='padding-top:10px;'>
                                                <div class='col-md-4 black'>Old name</div>
                                                <div class='col-md-8'>  
                                                    <input class='oldname' name='oldname' style='width:100%' type='text' value='' readonly/>
                                                </div>
                                            </div>
                                            <div class='row' style='padding-top:10px;'>
                                                <div class='col-md-4'>New name</div>
                                                <div class='col-md-8'>  
                                                    <input class='newname' name='newname' style='width:100%' type='text' value=''/>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 text-center' style='padding-top:10px;'>
                                                    <input type="submit" class="btn btn-md btn-primary" value='Change Name' name='submit' />
                                                </div>
                                            </div>
                                        
                                            <input class='dirname' name='dirname' type='hidden' value='' />
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <div class='col-md-3'>
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                        <h3>Edit content</h3>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12 text-center' style='padding-top:10px;'>
                                        Want to edit the content of the tab ?<br />
                                        <br />
                                        <a class='btn btn-md btn-primary taburl' href=''>Go to the tab</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
      			</div>
      			<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			
      			</div>
	    	</div>
	  	</div>
	</div>
	<!-- /EDITABLE MODAL -->
	<?php } ?>

	<!-- MAIN CONTENT FO A TAB -->
	<div class="main-content" style='margin:75px 75px 0 75px; height : 80%'>
		<div class="container-fluid">
			<?php if ($editable) { ?>
                <form method="post" action='../scripts/save_to_file.php'>
    				<div class='data'>
    					<input type='hidden' name='filename' value='<?php echo $tab_path; ?>' />
    					<textarea name="data" id='data' style='min-height : 100px;'>
    					 	<?php echo $data; ?>
    					</textarea>
    				</div>
                </form> 
            <?php } else { ?>
                <div class='data'>
                    <?php echo $data; ?>
                </div>
            <?php } ?>
		</div>
	</div>
	<!-- END MAIN CONTENT OF A TAB -->

	<?php include '../base/foot.php' ?>

	<?php if ( $editable ) { // The fns to send data ?>
		<script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

		<script>
			function tab_name_edit(el) {
				var $el = $(el);
				var oldname = $el.text().replace(/^\s+|\s+$/g, '');
				if ($el.hasClass('newtab')) {
					$('#edit_modal').find('.oldname').val('').css('background', '#eee');
					$('#edit_modal').find('.newname').val(oldname).show();
					$('#edit_modal').find('.dirname').val('<?php echo $event_path; ?>').show()					
				} else {
					$('#edit_modal').find('.oldname').val(oldname).show().css('background', '#eee');
					$('#edit_modal').find('.newname').val(oldname).show();
					$('#edit_modal').find('.dirname').val('<?php echo $event_path; ?>').show()
                    $('#edit_modal').find('.deleteurl').prop('href', '../scripts/delete_file.php?file_name=' + encodeURI('<?php echo $event_path; ?>/' + oldname))
                    $('#edit_modal').find('.taburl').prop('href', "<?php 
                        if ($editable) {
                            $editurl = '&edit';
                        } else {
                            $Editurl = '';
                        }
                        echo '?category=' . urlencode($category) . '&event=' . urlencode($event) . '&tab=' . urlencode($filetab) . $editurl;
                    ?>");
				}
				$('#edit_modal').modal()
			}
			$(document).ready(function() {
				CKEDITOR.inline('data')
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

	<script>
		$(document).ready(function() {
			$(window).scroll(function(){
			    var $nav = $('.navbar');
			    if ($('body').scrollTop() > 0) {
			        if ($nav.data('size') == 'big') {
			            $nav.data('size','small').stop().animate({
			                height:'50px',
			            }, 600);
			        }
			    } else {
			        if ($nav.data('size') == 'small') {
			            $nav.data('size','big').stop().animate({
			                height:'60px',
			            }, 600);
			        }  
			    }
			});
		})
	</script>
</body>
</html>