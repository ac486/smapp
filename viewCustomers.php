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

    <title>Sunmint | List</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

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
          <li>
              <a href="home.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
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
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">

                    <li>
                        <a id="logout_btn">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Freedom Soldiers</h5>
                        </div>
                        <div class="ibox-content">

                            <table id="list" class="footable table table-stripped toggle-arrow-tiny">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Name</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th data-hide="all">Address</th>
                                    <th data-hide="all">System Size</th>
                                    <th data-hide="all">System Production</th>
                                    <th data-hide="all">Current Usage</th>
                                    <th data-hide="all">Monthly Payments</th>
                                    <th>Phone</th>
                                    <th>Process</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
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

<!-- FooTable -->
<script src="js/plugins/footable/footable.all.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
    <script src="components/scripts.js"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();


        jQuery.post("/smapp/ajaxhandler/ajaxhandler.php", {
  						ajax_action: 'view_customers',
  					},
  					function (data) {
  						if(data != 0 ){
               data = jQuery.parseJSON(data);
                for(var i = 0; i < data.length; i++){
                  var row = (`
                    <tr>
                    <td>`+data[i]['name']+`</td>
                    <td>`+data[i]['city']+`</td>
                    <td>`+data[i]['state']+`</td>
                    <td>`+data[i]['address']+`</td>
                    <td>`+data[i]['size']+`</td>
                    <td>`+data[i]['production']+`</td>
                    <td>`+data[i]['yr_usage']+`</td>
                    <td>`+data[i]['monthly_pay']+`</td>
                    <td>`+data[i]['phone1']+`</td>
                    <td>`+data[i]['status']+`</td>
                    <tr>
                    `);
                    $("table tbody").append(row);
                }
  						}
  						else{
  							$("#modal_message").text("Oops!");
  							$("#modal_nav").attr("href","home.html");
  							$("#confirm_modal").modal("toggle");
  							return false;
  						}
  					}
  			);


    });

</script>

</body>

</html>
