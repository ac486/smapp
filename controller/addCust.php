<?php
//include ("../config/config.php");
$json_cust_list = file_get_contents("php://input");

$cust_list = json_decode($json_cust_list,true);
echo $cust_list;

//file_put_contents("../models/dbModel.php",$cust_list);
redirect("../viewCustomers.html");

?>