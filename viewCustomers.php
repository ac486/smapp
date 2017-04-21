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

    <title>Sunmint | Customers </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="photos/sunmintfavicon.png" type="image/x-icon">
    <?php
    include "config/config.php";
?>
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
                <li >
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
                </li>

                <li class="active">
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
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <div role="search" class="navbar-form-custom" >
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="searchBar">
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-top-links navbar-right">

                    <li>
                      <a href="index.html" id="logout_btn">
                          <i class="fa fa-sign-out"></i> Logout
                      </a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
                <div class="col-lg">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>My Customers </h5>

                        </div>
                        <div class="ibox-content">

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Phone</th>
                                    <th>E-Mail</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php



                                ?>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row hide" id="customerView">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Customer</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Peity -->
<script src="js/demo/peity-demo.js"></script>

<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $("#row1").click(function () {
            $("#customerView").removeClass("hide");
        });
    });
</script>

</body>

</html>
