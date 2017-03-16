
<?php

session_start();
// if(!isset($_SESSION['user'])){
//   exit();
// }

?>

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
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
            </li>
              <li>
                  <a href="addCustomers.php"><i class="fa fa-edit"></i> <span class="nav-label">Add Customer Lead</span></a>

              </li>

              <li>
                <a href="/viewCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">View Customers</span></a>
              </li>

        </ul>

    </div>
</nav>
