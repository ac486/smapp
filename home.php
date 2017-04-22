<?php
session_start();

if(!isset($_SESSION["user"])){
  header("Location: http://www.sunmintsolar.com/smapp/error.php"); /* Redirect browser */
exit();
}
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sunmint | Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" href="photos/sunmintfavicon.png" type="image/x-icon">


    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

  <nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
              <div class="dropdown profile-element"> <span>
                   </span>
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $_SESSION['user']['user_name'] ?> </strong>
                  </span> </span> </a>
              </div>
              <div class="logo-element">
                  SM
              </div>
          </li>
          <li class="active">
              <a href="home.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
          </li>

            <li>
              <a href="viewCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">View Customers</span></a>
            </li>
            <li>
              <a href="addCustomers.php"><i class="fa fa-id-card"></i> <span class="nav-label">Add Customers</span></a>
            </li>

      </ul>

  </div>
</nav>



    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-right">

                    <li>
                        <a id="logout_btn">
                            <i class="fa fa-sign-out" href="index.php" ></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
          <center>
                  <h1>Welcome <?php echo $_SESSION['user']['user_name'] ?></h1>
                  <h3 class="font-bold">Actions:</h3>
                  <a class="btn btn-info btn-rounded btn-block" href="addCustomers.php"><i class="fa fa-id-card"></i>    New Proposal</a>
                  <a class="btn btn-primary btn-rounded btn-block" href="viewCustomers.php"><i class="fa fa-table"></i>     View All</a>

                </center>


        </div>
    </div>

</div>



<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="components/scripts.js"></script>

<!-- Page-Level Scripts -->
<script>


</script>

</body>
<input type="hidden" class="admin_url" id="admin_url" value="<?PHP if(isset($adminUrl)) echo $adminUrl;?>">

</html>
