<!DOCTYPE html>
<html>

<head>
  <?PHP

  session_start();

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sunmint | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" href="photos/sunmintfavicon.png" type="image/x-icon">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
    include "config/config.php";
?>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SM</h1>

            </div>
            <h3>Sunmint</h3>
            <p>

            </p>
            <p>Login</p>
            <form class="m-t" role="form" action="#" id="login_form">
                <div class="form-group">
                    <input type="email" id="email" class="form-control has-error" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="components/scripts.js"></script>

</body>

<input type="hidden" class="admin_url"  value="<?PHP if(isset($adminUrl)) echo $adminUrl;?>">


</html>
