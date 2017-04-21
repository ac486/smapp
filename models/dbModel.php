<?php
include ("../config/config.php");
session_start();

// model class
class dbModel
 {


	/*-----------------------------------------------*/


  private $logout = 0;
  private $login = 1;
  //tables
	private $tbl_user = 'tbl_user';
  private $tbl_customer = 'tbl_customer';
  private $tbl_system = 'tbl_system';


 /*-----------------------------------------------*/
 	public $objClickModel;
 	public $config;

    // Constructor
	 function  __construct(){
	 }


	// user logout
	 public function userLogout(){
    global  $con;
     $id = $_SESSION['user']['user_id'];

    $queryStr=" UPDATE tbl_user SET `status` = '$logout' WHERE `tbl_user`.`id` = '$id' ";
    $queryExi = mysqli_query($con,$queryStr);

		$_SESSION['user']['user_name']= '';
    $_SESSION['user']['role']= '';
    $_SESSION['user']['user_id']= '';

    session_start();
    session_unset();
    session_destroy();
		$this->redirection(admin_url);
		return true;
	}


  public function newSystem($aSystem){
     global $con;
     $id = $aSystem['cust_id'];
     $size = $aSystem['sys_size'];
     $production = $aSystem['sys_prod'];
     $panels = $aSystem['sys_panels'];
     $panel_type = $aSystem['sys_panel_type'];
     $cost = $aSystem['sys_cost'];
     $srec_month = $aSystem['srec_month'];
     $srec_annu = $aSystem['srec_annu'];
     $srec_15yr = $aSystem['srec_15year'];
     $fed = $aSystem['fed_credit'];
     $month_pay = $aSystem['monthly_payment'];

     $queryStr="INSERT INTO `tbl_system` VALUES ('$id', '$size', '$production', '$panels', '$panel_type', '$cost', '$fed', '$srec_annu', '$month_pay', '$srec_month', '$srec_15yr') ";
     $queryExi = mysqli_query($con,$queryStr);


    $queryStrId = " SELECT * from tbl_system where id='$id' ";
    $queryExi = mysqli_query($con,$queryStrId);

    if(mysqli_num_rows($queryExi) > 0) {
      $id  = mysqli_fetch_assoc($queryExi);
      return 1;
    }
    else {
      return false;
    }
   }

   public function newCustomer($aCustomer){
     global $con;
     $name = $aCustomer['cust_name'];
     $email = $aCustomer['cust_email'];
     $phone = $aCustomer['cust_phone'];
     $address = $aCustomer['cust_address'];
     $city = $aCustomer['cust_city'];
     $state = $aCustomer['cust_state'];
     $zip = $aCustomer['cust_zip'];
     $usage = $aCustomer['cust_usg_annual'];
     $cost = $aCustomer['cust_cost_annual'];
     $provider = $aCustomer['cust_prov'];
     $rep = $_SESSION['user']['user_id'];


    $queryStr=" INSERT INTO tbl_customer (`id`, `name`, `address`, `state`, `zipcode`, `city`, `phone1`, `email`, `provider`, `yr_usage`, `yr_bill`, `status`, `rep`) VALUES (NULL, '$name', '$address', '$state', '$zip', '$city', '$phone', '$email', '$provider', '$usage', '$cost', '0', '$rep')";
    $queryExi = mysqli_query($con,$queryStr);

    $queryStrId = " SELECT id from tbl_customer where email='$email' AND address='$address'";
    $queryExi = mysqli_query($con,$queryStrId);

    if(mysqli_num_rows($queryExi) > 0) {
      $id  = mysqli_fetch_assoc($queryExi);
      return $id['id'];
    }
    else {
      return false;
    }


   }

  public function newCustomer($aCustomer){
    global $con;
    $name = $aCustomer['cust_name'];
    $email = $aCustomer['cust_email'];
    $phone = $aCustomer['cust_phone'];
    $address = $aCustomer['cust_address'];
    $city = $aCustomer['cust_city'];
    $state = $aCustomer['cust_state'];
    $zip = $aCustomer['cust_zip'];
    $usage = $aCustomer['cust_usg_annual'];
    $cost = $aCustomer['cust_cost_annual'];
    $provider = $aCustomer['cust_prov'];
    $rep = $_SESSION['user']['user_id'];


   $queryStr=" INSERT INTO tbl_customer (`id`, `name`, `address`, `state`, `zipcode`, `city`, `phone1`, `email`, `provider`, `yr_usage`, `yr_bill`, `status`, `rep`) VALUES (NULL, '$name', '$address', '$state', '$zip', '$city', '$phone', '$email', '$provider', '$usage', '$cost', '0', '$rep')";
   $queryExi = mysqli_query($con,$queryStr);

   $queryStrId = " SELECT id from tbl_customer where email='$email' AND address='$address'";
   $queryExi = mysqli_query($con,$queryStrId);

   if(mysqli_num_rows($queryExi) > 0) {
     $id  = mysqli_fetch_assoc($queryExi);
     return $id['id'];
   }
   else {
     return false;
   }


  }





}

$objDBModel = new dbModel();
?>
