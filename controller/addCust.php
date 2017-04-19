<?php
//include ("../config/config.php");
if(isset($_POST['customer'])){
    $json = $_POST['customer'];

}
else {
    echo "illegal post";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "../models/addCust.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;


//file_put_contents("../models/dbModel.php",$cust_list);
//redirect("../viewCustomers.html");

?>