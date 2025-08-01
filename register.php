<?php include "include/server.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <script src="dist/js/iziToast.min.js" type="text/javascript"></script>
    <title>Register a topic</title>
</head>

<body>

 <?php
    if ($_GET['msg']=="success") { ?>
        <script>
       
           iziToast.success({
              title: 'Success',
              message: 'Topic Registered Successfully!',
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





 <?php
    if ($_GET['msg']=="topicExist") { ?>
        <script>
       
           iziToast.warning({
              title: 'Warning',
              message: 'Topic Alrready Exist!',
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




 <?php
    if ($_GET['msg']=="regExist") { ?>
        <script>
       
           iziToast.warning({
              title: 'Warning',
              message: 'Reg Number Already Registered!',
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



 <?php
    if ($_GET['msg']=="all") { ?>
        <script>
       
           iziToast.warning({
              title: 'all',
              message: 'all Registered!',
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






        <?php                   
$sql = "SELECT * FROM adminsetting WHERE id = '1'";
$run = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_assoc($run);

$name = $row['admin'];
$password = $row['password'];
$lower = $row['lower'];
$higher = $row['higher'];

// $Diploma = $row['Diploma'];
// $ND = $row['ND'];
// $HD = $row['HD'];
// $HND = $row['HND'];

$id = $_GET['id'];

?>
    <nav class="navbar navbar-vertical shadow bg-success">
    <div class="navbar-header">
            <h3 class="p-2">Project Topics Manager</h3>
    </div>
    <div class="navbar-inner p-2" id="openmodal">
        <i class="bi bi-person-circle" style="font-size: x-large;"></i>
       <span style="font-size: larger;"><?php echo $name; ?> </span>
    </div>
</nav>

<div class="fluid-container mx-auto" id="modal">
   <div>
    <span class="cancel" id="clear">&times</span>
   </div>
<div class="container text-light" style="padding: 0 6vh;">
    <div class="container">
        <i class="bi bi-brightness-high"></i>
        <i class="bi bi-brightness-low-fill"></i>
        <i class="bi bi-balloon-fill"></i>
        <i class="bi bi-balloon"></i>
        <i class="bi bi-asterisk"></i>
        <center><i class="bi bi-shield-lock"></i>
            <h4 style="color: mediumseagreen;">ADMIN SETTING</h4>
        </center>
    </div>
    <form action="" method="POST">

         <h5>Personal Information</h5>
        <div class="mt-3 text-light">
            <label for="name" class="text-light">Name</label>
            <input type="text" class="form-control" name="admin" value="<?php echo $name; ?>">
        </div>

        <div class="mt-2">
            <label for="pswd">Passwod</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>">
        </div>

        <div>
            <input type="checkbox" name="showPassword" id="showPassword" onclick="show()">
            <label for="showPassword"  class="showPassword">Show Password</label>
        </div>
        <br>

        <div class="fluid-container">
            <h5>Levels</h5>
            <div class="row">
                <div class="col-md-6">
                  <sub for="lower">Lower Level(s)</sub>
            <select name="lower" id="" class="form-control">
                <option value="<?php echo $lower; ?>"></option>
                <option value="Diploma">Diploma</option>
                <option value="ND">ND</option>
            </select>
                </div>

                <div class="col-md-6">
                    <sub for="hnd">Higher  Level(s)</sub>
                     <select name="higher" id="" class="form-control">
                        <option value="<?php echo $higher; ?>"></option>
                        <option value="Higher Diploma">Higher Diploma</option>
                        <option value="HND">HND</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- <div class="fluid-container mt-4">
            <div class="row">
                <u>
                    <h6 class="pb-1">LEVELS <sub>(Select Only Two)</sub></h6>
                </u>
                <div class="col-md-10">
                    <input type="checkbox" name="Diploma" id="" value="">&nbsp;Diploma Programme <br>
                    <input type="checkbox" name="ND" id="">&nbsp;ND Programme<br>
                    <input type="checkbox" name="HD" id="">&nbsp;HD Programme<br>
                    <input type="checkbox" name="HND" id="">&nbsp;HND Programme
                    
                </div>
               
            </div>
        </div> -->
        <div class="mt-3">
            <button class="form-control p-3 bg-success text-light" name="adminupdate">Save Changes</button>
        </div>

        <?php  ?>
        
    </form>
</div>
</div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-2 bg-success">
        <div class="hader p-3">
        <center>    
            <div class="logo" style="border-radius:1vh ">
            <img src="img/nilestu.png" class="p-3" alt="">
            </div>
                <h4 style="text-shadow: 0px 1px white;font-weight: bold;">ADMIN DASHBOARD</h4>
            </center>
        </div>
        <hr>
        
       <div class="mt-2">
        <a href="dashboard.php">
            <i class="bi bi-speedometer"></i>
            <span>Dashboard</span>
        </a>
       </div>

       <div class="mt-2">
        <a href="register.php">
            <i class="bi bi-person-plus-fill"></i>
            <span>Register Topic</span>
        </a>
       </div>

       
        <div class="mt-2">
        <a href="ndrecords.php">
            <i class="bi bi-person-lines-fill"></i>
            <span>Registered Topics</span>
        </a>
       </div>

        <div class="mt-2">
        <a href="index.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
        </a>
       </div></div>
        <div class="col-md-10 col-sm-10">
        
      
            <div class="container text-dark shadow mt-5">
               
                <form action="" method="post" class="form" id="form">
                    <div class="container">
                <h3 class="text-dark mt-5">Register Topic</h3>

                        <div class="row">

                           <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mt-2 p-2">
                                        <label for="name" class="text-dark">Name Of Student</label>
                                        <input type="text" class="form-control" placeholder="Enter student name" id="name" name="studentname">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="mt-2 p-2">
                                        <label for="name" class="text-dark">Student Regno:</label>
                                        <input type="text" class="form-control" placeholder="Enter student regno" id="name" name="studentregno">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mt-2 p-2">
                                        <label for="name" class="text-dark">Level</label>
                                        <select name="studentlevel" id="" class="form-control">
                                            <option value="">--Select Level--</option>
                                            <!-- <option value="Diploma">Diploma Programme</option> -->
                                            <option value="ND">ND Programme</option>
                                            <!-- <option value="HD">HD Programme</option> -->
                                            <option value="HND">HND Programme</option>
                                        </select>
                                    </div>
                                </div>
                                
                                        <input type="hidden" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="name" name="studentdate">
                            </div>
                           </div>



                           <div class="col-md-4">
                                <div class="mt-2 p-2">
                                    <label for="name" class="text-dark">Name Of Supervisor</label>
                                    <input type="text" class="form-control" placeholder="Enter name of supervisor" id="name" name="studentsupervisor">
                                </div>
                            </div>
                            

                            <div class="col-md-8">
                                <div class="mt-2 p-2">
                                    <label for="name" class="text-dark">Enter Project Topic</label>
                                    <input type="text" class="form-control" placeholder="Enter project topic" id="name" name="studenttopic">
                                </div>
                            </div>

                        
                            <div class="mt-2 p-2">
                                <input type="submit" value="REGISTER" class="btn btn-lg bg-success text-light form-control" style="letter-spacing: 1vh" id="name" name="registertopic">
                            </div>
                            <br>
                    </div>
                
                </form>
            </div>
 
        </div>

    </div>
</div>


<script>
    var openmodal = document.getElementById('openmodal');
    var modal = document.getElementById('modal');
    var clear = document.getElementById('clear');


    openmodal.onclick = function () {
        modal.style.display = "block";
        modal.style.width = "30%";
    }

    clear.onclick = function () {
        modal.style.display = "none";
        modal.style.width = "0%";
    }
</script>
 <script src="password.js"></script>

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
</body>
</html>