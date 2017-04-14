<?php
//include ("../config/config.php");
if(isset($_POST['customer'])){
    $json = $_POST['customer'];
    var_dump(json_decode($json,true));
}
else {
    echo "illegal post";
}

//file_put_contents("../models/dbModel.php",$cust_list);
//redirect("../viewCustomers.html");

?>