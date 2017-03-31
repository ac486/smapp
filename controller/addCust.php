<?php
include ("../config/config.php");

$json_cust_list = file_get_contents("php://input");

$cust_list = json_decode($json_cust_list,true);

file_put_contents("../models/addCust.php",$cust_list);
redirect("../customerView.html");

?>