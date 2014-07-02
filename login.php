<?php
if (!isset($_POST['login'])){
	echo join ('', file (login-form.html));
}
else {
	include "config.php"
	if (!mysql_connect($HOST,$USER,$PASS)) die ('Error');
	mysql_select_db($db);

	$r = mysql_query("select * from users where login= \"$login\"");
	$f = mysql_fetch_array($r);

	if ($f['password']==md5($pass)) {
		echo join('',file ('admin-menu.html')) ;

	}
	else die ("Non correct login");
}

?>