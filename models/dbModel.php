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



  // user login
     public function userLogin($aUser){
	   global  $con;
     $email = $aUser['email'];
     $password = $aUser['password'];

     $queryStr=" SELECT id,name,status,role from tbl_user where email= '$email' and password = '$password' ";

		 $queryExi = mysqli_query($con,$queryStr);
	   $data = 0;
	  if(mysqli_num_rows($queryExi) > 0) {
      $user  = mysqli_fetch_assoc($queryExi);


        $_SESSION['user']['user_name'] = $user['name'];
        $_SESSION['user']['role'] = $user['role'];
        $_SESSION['user']['user_id'] = $user['id'];
        $data = true;

		}
		return $data;
	}


  public function newSystem($aSystem){
    global $con;
    $yr_usage = $aSystem["yr_usage"];


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
