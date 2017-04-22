<?php
session_start();
global $objDBModel;
include "../models/dbModel.php";


  if(isset($_REQUEST['ajax_action']) && $_REQUEST['ajax_action']=='user_login'){

	 echo $objDBModel->userLogin($_REQUEST);

  }


    if(isset($_REQUEST['ajax_action']) && $_REQUEST['ajax_action']=='new_customer'){

  	 echo $objDBModel->newCustomer($_REQUEST);
    }


    if(isset($_REQUEST['ajax_action']) && $_REQUEST['ajax_action']=='new_system'){

  	 echo $objDBModel->newSystem($_REQUEST);
    }


    if(isset($_REQUEST['ajax_action']) && $_REQUEST['ajax_action']=='user_logout'){

  	 echo $objDBModel->userLogout($_REQUEST);
    }

	    if(isset($_REQUEST['ajax_action']) && $_REQUEST['ajax_action']=='view_customers'){

  	 echo $objDBModel->getCustomers($_REQUEST);
    }
?>
