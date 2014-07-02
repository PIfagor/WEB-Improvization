<?php


try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
    print "done\n";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$a = 1100; $b = true;
echo "\n".gettype($a);
if ($a=$b) echo 'a=b';
echo "\n".gettype($a);
echo "\n".gettype($b);

?>