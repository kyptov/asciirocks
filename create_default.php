<?php
$string = file_get_contents("default.txt");

$f=fopen("test.ans", "w");

include("subs.php");

echo "test.ans written";
?>