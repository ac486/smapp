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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sunmint | Customer Proposal</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
    include "config/config.php";
?>


</head>

<body>
  <div id="wrapper">
<!-- Side nav bar -->

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $_SESSION['user']['user_name'] ?> </strong>
                    </span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="login.html">Profile</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SM
                </div>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
            </li>

              <li>
                <a href="viewCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">View Customers</span></a>
              </li>
              <li class="active">
                <a href="addCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">Add Customers</span></a>
              </li>

        </ul>

    </div>
</nav>

<div id="page-wrapper" class="gray-bg dashbard-1">


<!-- Top nav bar -->
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="home.php" id="logout_btn">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </li>
        </ul>
    </nav>
</div>

<!--start new form-->
<div class="wrapper wrapper-content animated fadeInLeft">


<!-- Initial Input -->

    <div class="row">
          <div class="col-lg-8">

            <div class="ibox float-e-marginss">
              <center>
              <button class="btn btn-primary btn-warning dim btn-large-dim" type="button" id="presentation_btn" data-toggle="tooltip" data-placement="top" title="Presentation"><i class="fa fa-sun-o"></i></button><!--presentation-->

                <button class="btn btn-primary btn-info dim btn-large-dim" type="button" id="cust_input_btn" data-toggle="tooltip" data-placement="top" title="Customer Information"><i class="fa fa-user-o"></i></button> <!--customer input button-->
                <button class="btn btn-primary btn-danger dim btn-large-dim" type="button" id="cust_cur_btn" data-toggle="tooltip" data-placement="top" title="Customer Information"><i class="fa fa-usd"></i></button> <!--customer usage button-->

              <button class="btn btn-primary btn-success dim btn-dim btn-large-dim" type="button" id="sys_info_btn" data-toggle="tooltip" data-placement="top" title="System Information"><i class="fa fa-dashboard"></i></button><!--your system info-->
              <button class="btn btn-primary dim btn-large-dim" type="button" value="help" id="cost_brkdown_btn" data-toggle="tooltip" data-placement="top" title="Cost Breakdown"><i class="fa fa-area-chart"></i></button><!--cost breakdown-->
              <button class="btn btn-primary btn-info dim btn-large-dim" type="button" value="help" id="incentive_btn" data-toggle="tooltip" data-placement="top" title="Incentive Breakdown"><i class="fa fa-briefcase"></i></button><!--incentive breakdown-->
</center>
          </div>

        </div> <!-- end of row-->



                <!--Start form-->


  <div class="row"> <!--presentation box-->
      <div class="col-lg-8 initiallyHidden" id="solar_present">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>Presentation</h5>


                  <div class="ibox-tools">
                      <a class="collapse-link">
                          <i class="fa fa-chevron-up"></i>
                      </a>

                  </div>
              </div>
              <div class="ibox-content">

                <div class="carousel slide" id="carousel1">
                  <ol class="carousel-indicators">
                                      <li data-slide-to="0" data-target="#carousel1" class="active"></li>
                                      <li data-slide-to="1" data-target="#carousel1" class=""></li>
                                      <li data-slide-to="2" data-target="#carousel1" class=""></li>
                                      <li data-slide-to="3" data-target="#carousel1" class=""></li>
                                      <li data-slide-to="4" data-target="#carousel1" class=""></li>
                                      <li data-slide-to="5" data-target="#carousel1" class=""></li>

                                  </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img alt="image" class="img-responsive" href="carousel01" src="photos/solarp1.png">
                      </div>
                      <div class="item">
                        <img alt="image" class="img-responsive" href="carousel02" src="photos/solarp2.png">
                      </div>
                      <div class="item">
                        <img alt="image" class="img-responsive" href="carousel03" src="photos/solarp3.png">
                      </div>
                      <div class="item">
                        <img alt="image" class="img-responsive" src="photos/solarp4.png">
                      </div>
                      <div class="item">
                          <img alt="image" class="img-responsive" src="photos/solarp5.png">
                      </div>
                      <div class="item">
                          <img alt="image" class="img-responsive" src="photos/solarp6.png">
                      </div>

                    </div>
                    <a data-slide="prev" href="#carousel1" class="left carousel-control">
                        <span class="icon-prev"></span>
                    </a>
                    <a data-slide="next" href="#carousel1" class="right carousel-control">
                        <span class="icon-next"></span>
                    </a>
                </div>
              </div>
          </div>
      </div>
    </div>



    <!--customer info-->
    <div class="row">
        <div class="col-lg-8 initiallyHidden" id="cust_info_form">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Customer Information</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content ">
                    <form role="form" class="form form-inline">
                        <div class="input-group m-b">
                            <label class="sr-only">First Name</label>
                            <input  type="text" placeholder="First Name" id="cust_fn" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">Last Name</label>
                            <input type="text" placeholder="Last Name" id="cust_ln" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label  class="sr-only">Email address</label>
                            <input type="text" placeholder="Email" id="cust_email" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">Phone #</label>
                            <input type="value" placeholder="Phone #" id="cust_phone" class="form-control">
                        </div>
                        <p></p>
                        <div class="input-group m-b">
                            <label class="sr-only">Street Name</label>
                            <input type="text" placeholder="Street Name" id="cust_street" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">City</label>
                            <input type="text" placeholder="City" id="cust_city" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">State</label>
                            <input type="text" placeholder="State" id="cust_state" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">Zip Code</label>
                            <input type="value" placeholder="Zip Code" id="cust_zip" class="form-control">
                        </div>
                        <div class="input-group m-b">
                            <label class="sr-only">Current Utility Provider</label>
                            <select class="form-control m-b" name="provider" id="cust_prov">
                                              <option hidden>Current Utility Provider</option>
                                              <option>PSE&G</option>
                            </select>
                        </div>
                        <p></p>


                        <div class="input-group m-b" id="annual_input">
                            <label class="sr-only">Average Annual Usage</label>
                            <input type="value" placeholder="Annual Usage (kWh)" id="cust_avg_annual" class="form-control">
                        </div>
                        <div class="input-group m-b">

                        <label class="sr-only">Escalation Rate</label>
                        <input type="value" class="form-control" placeholder="Escalation %" id="market_escal">
                      </div>

<br><br>
<div class="input-group m-b">
<div class="i-checks">
  <label class="">
    <div class="iradio_square-green checked" style="position: relative;">
      <input type="checkbox" id="monthly" >
      <ins class="iCheck-helper" ></ins>
    </div> <i></i> Monthly Usages
  </label></div>
  </div>
<br><br>

<div id="monthly_inputs" class="monthly hide">
<br>
                          12 Month Usage</p>
                          <div class="input-group m-b">
                              <label class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Jan" id="jan" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Feb" id="feb" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Mar" id="mar" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Apr" id="apr" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="May" id="may" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Jun" id="jun" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="July" id="jul" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Aug" id="aug" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Sept" id="sep" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Oct" id="oct" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Nov" id="nov" class="form-control">
                          </div>
                          <div class="input-group m-b">
                              <label  class="sr-only">Avg Monthly Cost</label>
                              <input type="value" placeholder="Dec" id="dec" class="form-control">
                          </div>



                        </div>

                    </form>
                    <button id="generateInfo_btn" >Generate Usage and Cost</button>
                </div>
            </div>
        </div>

    </div>
    <!--usage info-->
    <div class="row">
    <div class="col-lg-8 initiallyHidden" id="usg_form">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Current Usage and Cost</h5>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>

              </div>
          </div>
          <div class="ibox-content">

                  <div class="col-lg-4">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-bolt fa-3x"></i>
                            </div>
                            <div class="col-xs-3 text-right">
                              <span>Usage</span>
                                <h2 class="font-bold"  id="cur_annual_usg"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                  <div class="widget style1 navy-bg">
                      <div class="row vertical-align">
                          <div class="col-xs-3">
                              <i class="fa fa-usd fa-3x"></i>
                          </div>
                          <div class="col-xs-3 text-right">
                            <span>Cost</span>
                              <h2 class="font-bold"  id="cur_annual_cost"></h2>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="col-lg-4">
                <label class="widget style2">Per kWh Rate</label>
                <input type="value" placeholder="kWh Rate" value="0.16" id="cust_rate">


              </div>
              <div class="input-group m-b">
                      <label  class="sr-only">Current Monthly Cost</label>

                      <h2>Current Monthly Cost</h2>
                      <input disabled type="value" placeholder="Current Monthly Cost" id="cur_avgmonthly_cost" class="form-control">
                  </div>


                  <div id="nothing_graph"></div>






            </div>
        </div>
      </div>

    </div>


        <div class="row initiallyHidden" id="sys_info_from"> <!--you system info-->
        <div class="col-lg-8">
        <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Your system info</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div role="form" class="form-inline">
            <body>
              <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                            <div class="btn btn-danger m-r-sm" id="sysSize">
                                              </div>
                                              Solar System Size
                                          </td>
                                          <td>
                                              <button type="button" class="btn btn-warning m-r-sm" id="actSize"></button>
                                             Actual Size
                                          </td>
                                          <td>
                                              <div  class="btn btn-default m-r-sm" id="panCount"></div>
                                              Panel Count
                                          </td>

                                      </tr>
                                      <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary m-r-sm" id="price"></button>
                                            Price
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info m-r-sm" id="PVMakeModel"></button>
                                              PV Panel Make & Model
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger m-r-sm" id="Inverter"></button>
                                            Inverter
                                        </td>

                                      </tr>
                                      <tr>

                                      </tr>
                                      </tbody>
                                  </table>


            </body>
          </div>

        </div>
        </div>


        </div>

        <div class="col-lg-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Solar Production</h5>

                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="prodVsUsage" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <!--Cost of Doing Nothing-->
        <div class="row">
            <div class="col-lg-8 initiallyHidden" id="costOfNothing">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Cost of Doing Nothing</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="monthlyCircle">
                            Monthly
                            <h2 id="monthlyText"></h2>
                        </div>
                        <div id="yearlyCircle">
                            Yearly
                            <h2 id="yearlyText"></h2>
                        </div>
                        <div id="decadeCircle">
                            10 Years
                            <h2 id="decadeText"></h2>
                        </div>
                        <div id="twentyFiveCircle">
                            25 Years
                            <h2 id="twentFiveText"></h2>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    <div class="row"> <!--cost breakdown-->
    <div class="col-lg-8 initiallyHidden" id="cost_brkdown_form">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Cost breakdown</h5>
          <div class="ibox-tools">
              <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
              </a>
          </div>
      </div>
      <div class="ibox-content">
          <form role="form" class="form-inline">



             <body>
              <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                            <div class="btn btn-danger m-r-sm" id="Monthly_Payment_NoSREC">
                                              </div>
                                              Sun15yr
                                          </td>

                                          <td>
                                            <div class="btn btn-danger m-r-sm" id="Total_Monthly_Payment">
                                              </div>
                                              Total Monthly Investment
                                          </td>
                                      </tbody>
              </table>
              </body>
          </form>
      </div>
    </div>
    </div>

    </div>

    <div class="row"> <!--incentive breakdown-->
    <div class="col-lg-8 initiallyHidden" id="incentive_form">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>incentive</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div role="form" class="form-inline">
              <body>
              <table class="table">
                    <tbody>
                    <tr>
                        <td>
                          <div class="btn btn-danger m-r-sm" id="estimated_annual_prod">
                            </div>
                            Estimated Annual Production
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning m-r-sm" id="SREC15yr"></button>
                           SREC 15 Year
                        </td>
                        <td>
                            <div  class="btn btn-default m-r-sm" id="SRECannual"></div>
                            SREC Annual
                        </td>

                    </tr>
                    <tr>
                      <td>
                          <button type="button" class="btn btn-primary m-r-sm" id="SRECmonthly"></button>
                          SREC Monthly
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary m-r-sm" id="Federal_Tax_Credit"></button>
                        Federal  Tax Credit
                      </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-info m-r-sm" id="acresSaved"></button>
                            Acres of U.S Forests in One Year
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary m-r-sm" id="treesSaved"></button>
                            Trees saved Per Year
                        </td>

                        <td>
                            <button type="button" class="btn btn-default m-r-sm" id="co2"></button>
                            CO2 Emissions in Tons
                        </td>

                    </tr>

                    </tbody>
              </table>
            </div>

            <div>
                <canvas id="solarVsnoSolar" height="140"></canvas>
            </div>
        </div>
    </div>

    </div>



    </div>




                      <div class="submitbutton"> <!--javascript links all forms here to one submit button-->
                        <input type="button" class="btn btn-primary" value="Submit!" onclick="submitForms()" />
                      </div>
        </div> <!--wrapper div-->






    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <!-- c3 charts -->
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>

    <script src="js/plugins/morris/morris.js"></script>
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>

    <!-- Morris demo data-->

    <!-- Scripts -->
    <script src="components/scripts.js"></script>


</body>

<input type="hidden" class="admin_url" id="admin_url" value="<?PHP if(isset($adminUrl)) echo $adminUrl;?>">
<input type="hidden" class="rep_id" id="rep_id"  value="<?PHP if(isset($repID)) echo $repID;?>">

</html>
