<?php
require "bank.php";


class bar
{
	use bank;
}

$obj = new bar;

$obj->arman();
echo "<br>";
$obj->niloy();

?>