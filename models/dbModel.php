<?php
include ("../config/config.php");
// model class
class dbModel
 {


	/*-----------------------------------------------*/


	private $bottom_text = 0;
	private $top_text = 1;
	private $homeslider ='hil_homeslider';
	private $order_by_id_asc = 'ORDER BY id ASC';
	private $order_by_id_desc = 'ORDER BY id DESC';
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

     $queryStr=" SELECT id,name,role from tbl_user where email= '$email' and password = '$password' ";

		 $queryExi = mysqli_query($con,$queryStr);
	   $data = 0;
	  if(mysqli_num_rows($queryExi) > 0) {
      $user  = mysqli_fetch_assoc($queryExi);

			session_start();
      $_SESSION['user']['user_name']= $user['name'];
      $_SESSION['user']['role']= $user['role'];
      $_SESSION['user']['user_id']= $user['id'];


			$data = true;
		}
		return $data;
	}




}

$objDBModel = new dbModel();
?>
