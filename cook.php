<?php

if (!isset($_COOKIE['username'])) {
		setcookie("username","vlad",time()+3600);
		echo "koko";
} else echo $_COOKIE['username'];
?>
