<?php
	echo exec("git stash");
	echo nl2br(".----------------------\n");
	echo exec("git pull");
?>