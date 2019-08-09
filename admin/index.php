<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Admin Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Required -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css?v=1.0">
    <link rel="stylesheet" href="dist/css/login.css?v=1.0">
    <!--Custom link-->
    <link rel="stylesheet" href="dist/css/style.css?v=1.0">
    <script src="bower_components/jquery/dist/jquery.js?v=0.0"></script>
    <script src="dist/js/jquery.validate.js?v=0.0"></script>
    <script src="dist/js/login.js?v=0.0"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-6">
                <div class="account-wall">
                    <h1 class="text-center login-title">Log in to Travel Portal</h1>
                    <img class="profile-img" src="www.shobizxtrac.com/it/assets/image/men.jpg" border="0" alt="">
                    <span style="text-align:center"></span>
                    <form class="form-signin" action="" method="post" id="login_form">
                        <input type="text" name="username" class="form-control" placeholder="Username" required  autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="logbtn"><input name="submit_btn" value="Login" type="submit" class="btn btn-lg btn-primary btn-block"></div>
                        <!-- <label class="checkbox pull-left"><input type="checkbox" value="remember-me">Remember me</label>    -->
                    </form>
                    <span id="message" style="text-align:center"></span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
      
      

