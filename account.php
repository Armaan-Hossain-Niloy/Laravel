<?php
require "bank.php";

/**
 * 
 */
class account extends bank
{

}
$bank = new bank();
echo "Balance   : " .$bank->balance();


?>