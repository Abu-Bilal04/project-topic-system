<?php include "include/server.php"; ?>
<!DOCTYPE html>
<html lang="en">


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

$id = isset($_GET['id']) ? $_GET['id'] : null;

?>

<head>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $lower?> Records</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dismissible.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <script src="dist/js/iziToast.min.js" type="text/javascript"></script>
   <!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <style>
        .btn{
            letter-spacing: 0;
        }

        

nav{
    color: white;
}

ul{
    list-style-type: none;
}

div a{
    display: block;
    color: white;
    margin-top: 3vh;
    font-size: 16px;
    text-decoration: none;
    
}
.navbar-inner{
    cursor: pointer;
}

.bi-shield-lock {
    position: absolute; 
    font-size: 10vh; 
    left: 40%; 
    top: 1%; 
    z-index: -1;
    color: mediumseagreen;
}
.cancel{
    font-size: xx-large;
    position: relative;
    padding: 5vh;
    font-weight: bolder;
    cursor: pointer;
    color: white !important;
}
#modal{
    background-color: rgb(218, 151, 151);
    background-color: rgb(0, 0, 0, 0.9);
    padding-top: 50px;
    color: red;
    display: none;
    position: fixed;
    top: 70px;
    right: 0;
    z-index: 1;
    transition: 4s;
    overflow-x: hidden;
    width: 30%;
    height: 100%;
    animation: modal 0.5s;
    -webkit-animation: modal 0.5s;
}

@-webkit-keyframes modal{
    from{-webkit-transform: scale(0);}
    to{-webkit-transform: scale(1);}
}


@keyframes modal{
    from{transform: scale(0);}
    to{transform: scale(1);}
}
div a:hover {
    color: black;
    text-decoration: none;
}

.col-md-2{
    height: 100vh;
}

.col-md-2 .col-sm-2 {
    height: fit-content;
}

.mt-3{
    font-size: 16px;
    color: black !important;
}

.col-md-2{}

.logo{
    background-color: white;
    transition: 2s;
    animation: changebackground 10s infinite;
}

@keyframes changebackground{
    
    50%{
        transform: rotateY(90deg) translateY(-2vh) scale(2, 1);
        background-color: inherit;
    }
}

.bi-brightness-high{
    position: absolute; 
    font-size: 6vh; 
    right: 2%; 
    top: 4%; 
    z-index: -1;
    color: rgb(62, 80, 70);
        animation: low-fill 10s infinite;
}

.bi-asterisk {
    position: absolute;
    font-size: 6vh;
    left: 3%;
    top: 00%;
    z-index: -1;
    color: rgb(62, 80, 70);
    animation: asterisk 20s infinite;
}

.bi-brightness-low-fill {
    position: absolute;
    font-size: 6vh;
    left: 0%;
    top: 64%;
    z-index: -1;
    color: rgb(62, 80, 70);
    animation: low-fill 10s infinite;
}

.bi-balloon {
    position: absolute;
    font-size: 6vh;
    left: 80%;
    top: 80%;
    z-index: -1;
    color: rgb(62, 80, 70);
    animation: balloon 30s infinite;
}

.bi-balloon-fill {
    position: absolute;
    font-size: 6vh;
    left: 40%;
    top: 50%;
    z-index: -1;
    color: rgb(62, 80, 70);
    animation: balloon-fill 15s infinite;
}

/* asterisk animation */
@keyframes asterisk {

       
    35% {
            left: 50%;
            top: 80%;
            transform: rotate(360deg);
        }
    
        70% {
            left: 100%;
            top: 00%;
        }

}
/* balloon animation */
@keyframes balloon {

    25% {
        left: 50%;
        top: 80%;
        transform: rotate(360deg) scale(1);
    }

    35% {
        left: 30%;
        top: 80%;
        transform: rotate(360deg) scale(1);
    }

    100% {
        right: 0%;
        top: 00%;
        transform: scale(4);
    }

}

/* low-fill animation */
@keyframes high-fill {

    25% {
        left: 100%;
        top: 50%;
        transform: rotate(360deg) scale(1);
    }

    35% {
        left: 0%;
        top: 30%;
        transform: rotate(360deg) scale(2);
    }

    100% {
        left: 100%;
        top: 10%;
        transform: scale(4);
    }

}


/* high-fill animation */
@keyframes low-fill {

    25% {
        left: 100%;
        top: 50%;
        transform: rotate(360deg) scale(4);
    }

    35% {
        left: 0%;
        top: 30%;
        transform: rotate(360deg) scale(1);
    }

    100% {
        left: 100%;
        top: 10%;
        transform: scale(6);
    }

}

/* balloon animation */
@keyframes balloon-fill {

    5% {
        left: 40%;
        top: 83%;
    }

     15% {
        left: 50%;
        top: 80%;
    }

     25% {
        left: 50%;
        top: 80%;
    }

    35% {
        left: 30%;
        top: 80%;
        transform: rotate(0deg) scale(1);
    }

    50% {
        left: 20%;
        top: 70%;
        transform: rotate(10deg) scale(1);
    }

    75% {
        left: 10%;
        top: 60%;
        transform: rotate(40deg) scale(2);
    }

    100% {
        left: 0%;
        top: 0%;
        transform: rotate(-40deg) scale(3);
    }

}
    @media (max-width: 768px) {
        #modal {
            width: 90% !important;
            left: 5%;
            top: 0;
            padding-top: 20px;
        }
        .col-md-2, .col-md-10 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .navbar-header h3 {
            font-size: 1.2rem;
        }
        .logo img {
            width: 80px !important;
            height: auto;
        }
        .container.text-dark.shadow.mt-3 {
            margin-top: 1rem !important;
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
if (isset($_GET['msg']) && $_GET['msg']=="success1") { ?>
    <script>
       iziToast.success({
          title: 'Success',
          message: 'Record Updated Successfully!',
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
            <nav class="col-12 col-md-2 col-sm-2 bg-success">
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
       </div></nav>
            <main class="col-12 col-md-10 col-sm-10">
    
    
                <div class="container text-dark shadow mt-3">
                   
                           
                                <h3 class="text-dark mb-5">
                                    <a href="hndrecords.php" class="btn btn-warning">Switch</a>
                                    <?php echo $lower;?> Project Records</h3>
                                
                                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Topics</th>
                                            <th>Supervisor</th>
                                            <th>Topics</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                            
                                    <?php
                              $sn=1;
                              $psql = mysqli_query($dbcon,"SELECT * FROM  ndtopics ORDER BY id DESC");
                              while($prop = mysqli_fetch_array($psql)){ ?>
                                    <tr>
                            
                                        <td>
                                            <?php echo $sn++; ?>
                                        </td>
                                        <td>
                                            <?php echo $prop['studentname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $prop['studentregno']; ?>
                                        </td>

                                        <td>
                                            <?php echo $prop['studentsupervisor']; ?>
                                        </td>
                                        <td>
                                            <?php echo $prop['studenttopic']; ?>
                                        </td>
                                        
                                        <td>
                            
                                            <a data-tooltip title="Edit" href="editnd.php?id=<?php echo $prop['id']; ?>"
                                                class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                                            
                                            <!-- <a data-tooltip title="Delete" href="delete.php?id=<?php echo $prop['id']; ?>"
                                                class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                            
                             -->
                                        </td>
                            
                                    </tr>
                            
                                    <?php } ?>
                                </table>
                </div>
                </div>
    
            </main>
    
        
    </div>



<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
        <!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $('[data-tooltip]').tooltip();
        });
</script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>  

        
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