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
    <title>Edit Topic</title>
    <style>
        @media (max-width: 768px) {
            #modal {
                width: 95% !important;
                left: 2.5%;
                top: 0;
                padding-top: 20px;
            }
            .col-md-2, .col-md-10, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
                height: auto !important;
            }
            .logo img {
                width: 80px !important;
                height: auto;
            }
            .container.text-dark.shadow.mt-5 {
                margin-top: 1rem !important;
            }
            .row > [class*='col-'] {
                margin-bottom: 1rem;
            }
        }
        .logo img {
            width: 120px;
            height: auto;
        }
    </style>
</head>
<body>

 <?php
    if (isset($_GET['msg']) && $_GET['msg'] == "success") { ?>
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
            <div class="col-12 col-md-2 bg-success">
        <div class="hader p-3">
        <center>    
            <div class="logo" style="border-radius:1vh ">
            <img src="img/nilestu.png" class="p-3 img-fluid" alt="">
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
        <div class="col-12 col-md-10">
        
      
            <div class="container text-dark shadow mt-5">
               
                <form action="" method="post" class="form">
                    <div class="container">
                <h3 class="text-dark mt-5">Edit Topic</h3>

                        <div class="row">
                            <?php                   
                                $sql = "SELECT * FROM  hndtopics WHERE id = '$id'";
                                $run = mysqli_query($dbcon,$sql);
                                $row = mysqli_fetch_assoc($run);

                                $studentname = $row['studentname'];
                                $studentregno = $row['studentregno'];
                                $studentdate = $row['studentdate'];
                                $studenttopic = $row['studenttopic'];

                            ?>
                           <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="mt-2 p-2">
                                        <label for="name" class="text-dark">Name Of Student</label>
                                        <input type="text" class="form-control" value="<?php echo $studentname; ?>" id="name" name="studentname">
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-3">
                                    <div class="mt-2 p-2">
                                        <label for="regno" class="text-dark">Student Regno:</label>
                                        <input type="text" class="form-control" value="<?php echo $studentregno; ?>" id="regno" name="studentregno">
                                    </div>
                                </div>

                                
                                <div class="col-12 col-md-4">
                                    <div class="mt-2 p-2">
                                        <label for="date" class="text-dark">Date</label>
                                        <input type="text" class="form-control" value="<?php echo $studentdate; ?>" id="date" name="studentdate">
                                    </div>
                                </div>
                            </div>
                           </div>
                            

                            <div class="col-12">
                                <div class="mt-2 p-2">
                                    <label for="topic" class="text-dark">Project Topic</label>
                                    <input type="text" class="form-control" value="<?php echo $studenttopic; ?>" id="topic" name="studenttopic">
                                </div>
                            </div>

                        
                            <div class="mt-2 p-2 w-100">
                                <input type="submit" value="UPDATE" class="btn btn-lg bg-success text-light form-control" style="letter-spacing: 1vh" id="updatehnd" name="updatehnd">
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

</body>
</html>