<?php
	$directory = "../../img/spons/";
	$files = glob($directory . "*", GLOB_ONLYDIR);
    //echo "files:".$files."\n";
	foreach($files as $dirname){
		$images = scandir($dirname);
		$ignore = Array(".", "..");
		$title2 = explode(".",$dirname);
        $title  = $title2[5];//to remove the numbering system from directory names
	    echo "<div class='row'>\n<div class='col-xs-12 d4'>".$title."<br>\n";//this would represent category of sponsors
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				$explode = explode(".",$curimg);//image extension trimming for getting URL START
				$end = '';
				$begin = '';
				if(count($explode) > 0){
					$end = array_pop($explode);
					if(count($explode) > 0){
						$begin = implode('.', $explode);
					}
				}//image extension trimming for getting URL END
				$url = strtr ($begin, array ('^' => '/'));//replacing '^' with '/' in the url
				echo "<a href='http://".$url."'><img src='../../img/spons/".$dirname."/".$curimg."' class='sponsor' style='max-height:200px;max-width:500px;'></a>\n";//main img content
			}
		}
		echo "</div>\n</div>\n";
	}
?>
