<?php
$os[0] = "Unix";
$os[1] = "Linux";
$os[2] = "Winows";
$os[3] = "Ubunty";
$os[4] = "Bolgenos";

for ($i=0; $i < count($os); $i++) { 
	echo "$os[$i] <br>";
};


echo "<br>.<br>";

$sa[] = "nothing";
$sa[] = "anton";
$sa[] = "neaton";
$sa[] = "nothing";

foreach ($sa as $key => $value) {
	echo "$key => $value <br>";
};

echo "<br>.<br>";
$DB = array("host" => "localhost","user" => "root", "password" => "", "db_name" => "test");

for (reset($DB); ($k = key($DB)); next($DB)){
	echo "$k =>". current($DB)."<br>";
}

?>