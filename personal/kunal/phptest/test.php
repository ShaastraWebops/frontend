<?php
	$directory = "";
	$files = glob($directory . "*", GLOB_ONLYDIR);
	foreach($files as $dirname){
		$images = scandir($dirname);
		$ignore = Array(".", "..");
		$title = explode(".",$dirname)['1'];				//to remove the numbering system from directory names
		echo "<h2>".$title."</h2><br>";						//this would represent category of sponsors
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				$explode = explode(".",$curimg);			//image extension trimming for getting URL START
				$end = '';
				$begin = '';
				if(count($explode) > 0){
					$end = array_pop($explode);
					if(count($explode) > 0){
						$begin = implode('.', $explode);
					}
				}											//image extension trimming for getting URL END
				$url = strtr ($begin, array ('^' => '/'));  //replacing '^' with '/' in the url
				echo "<a href='http://".$url."'><img src='".$dirname."/".$curimg."' style='width:100px;height:auto;'></a>";//main img content
			}
		}
	}
?>