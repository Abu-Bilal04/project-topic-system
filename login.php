<?php include 'include/server.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styleq.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap-icons.css">
    <link href='NProgress/support/style.css' rel='stylesheet' />
    <link href='NProgress/nprogress.css' rel='stylesheet' />
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <script src="dist/js/iziToast.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src='NProgress/nprogress.js'></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        .showPassword{
            cursor: pointer;
        }
        body{
            background-image: url('img/.jpg');
            background-attachment: fixed;	
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login{
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn{
            background-color: green;
        }
        .btn:hover{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
 <?php
    if (isset($_GET['msg']) && $_GET['msg'] == "error") { ?>
        <script>
           iziToast.error({
              title: 'Error',
              message: 'Wrong Login Details',
              position: 'topRight',
               animateInside: true,
          });
    </script> 
    <?php }
    else{
      ?>
      <?php
    }
?>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height:100vh;">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <section id="login" class="login p-4 p-md-5">
                    <center>
                    <h4>ADMIN <span class="text-success">LOGIN</span></h4>
                    </center>
                    <div class="log">
                        <form action="login.php" method="POST" id="form">
                        <div class="mt-3">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter Your Username" class="form-control" required="">
                        </div>
                        <div class="mt-3">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required="">
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="showPassword" id="showPassword" onclick="show()">
                            <label for="showPassword"  class="showPassword">Show Password</label>
                        </div>
                        <div class="mt-3">
                        <button class="btn btn-lg text-light w-100" name="adminLogin">
                            <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="width: 20px; height: 20px;display: none;"></span>
                            <span class="bi bi-lock-fill" id="lock" style="color:white"></span>
                            Login
                        </button>
                        </div>
                    </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    $("#lock").hide();
    $("#spinner").show();
    setTimeout(function() { $("#spinner").hide(); $("#lock").show(); NProgress.done(); $('.fade').removeClass('out'); }, 1000);
  </script>
<script type="text/javascript">
    //adding loaders
$(document).ready(function(){
 $(document).on('submit','#form', function(e){
     setTimeout(function() { $("#spinner").show(); $("#lock").hide(); NProgress.done(); $('.fade').removeClass('out'); }, 1000);
 });
  });
</script> 
<script>
    function show() {
    var password = document.getElementById('password');
    if (password.type === 'password') {
        password.type = 'text';
    } else {
        password.type = 'password';
    }
}
</script>
</body>
</html>