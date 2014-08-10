<?php
	echo exec("git stash");
	echo nl2br("\n----------------------\n");
	echo exec("git pull");
?>