<?php
echo "You from ".getenv("HTTP_REFERER")."<BR>";
echo "IP  you is:".getenv("REMOTE_ADDR")."<BR>";
$brazzers = getenv("HTTP_User_agent");
if (strpos($brazzers, "Chrome")!== false) 
 {
	echo "Brouser: Chrome<br>";
}else echo "Another Brouser: ($brazzers)<br>";

?>