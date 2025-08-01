
<?php
include "db_connection.php";
  $id = $_GET['id'];

if (isset($_POST['registertopic'])) {
  

 $studentname = $_POST['studentname'];
 $studentregno = $_POST['studentregno'];
 $studentlevel = $_POST['studentlevel'];
 $studentdate = $_POST['studentdate'];
 $studentsupervisor = $_POST['studentsupervisor'];
 $studenttopic = $_POST['studenttopic'];
 
// $topic = $_GET['studenttopic'];

 
if ($studentlevel == "ND") {
$checktopic = "SELECT * FROM  ndtopics WHERE studenttopic = '$studenttopic'";
$checkregno = "SELECT * FROM  ndtopics WHERE studentregno = '$studentregno'";
$realtopic = mysqli_query($dbcon,  $checktopic);
$realregno = mysqli_query($dbcon,  $checkregno);
$finalResultForTopic = mysqli_fetch_assoc($realtopic);
$finalResultForRegno = mysqli_fetch_assoc($realregno);
 if ($finalResultForTopic)
echo "<script>window.open('register.php?msg=topicExist','_self')</script>";

   elseif ($finalResultForRegno){
echo "<script>window.open('register.php?msg=regExist','_self')</script>";   }


 else{
    $insert = "INSERT INTO  ndtopics (studentname,studentregno,studentdate,studentsupervisor,studenttopic) 
   VALUES ('$studentname','$studentregno', '$studentdate','$studentsupervisor', '$studenttopic')";

  if (mysqli_query($dbcon,$insert)) {
         echo "<script>window.open('register.php?msg=success','_self')</script>";
  }
 }
 
}

elseif($studentlevel == "HND"){
$checktopic = "SELECT * FROM  hndtopics WHERE studenttopic = '$studenttopic'";
$checkregno = "SELECT * FROM  hndtopics WHERE studentregno = '$studentregno'";
$realtopic = mysqli_query($dbcon,  $checktopic);
$realregno = mysqli_query($dbcon,  $checkregno);
$finalResultForTopic = mysqli_fetch_assoc($realtopic);
$finalResultForRegno = mysqli_fetch_assoc($realregno);
 if ($finalResultForTopic)
   echo "<script>window.open('register.php?msg=topicExist','_self')</script>";


   elseif ($finalResultForRegno){
   echo "<script>window.open('register.php?msg=regExist','_self')</script>";
   }


 else{
    $insert = "INSERT INTO  hndtopics (studentname,studentregno,studentdate,studentsupervisor,studenttopic) 
   VALUES ('$studentname','$studentregno', '$studentdate','$studentsupervisor' ,'$studenttopic')";

  if (mysqli_query($dbcon,$insert)) {
         echo "<script>window.open('register.php?msg=success','_self')</script>";
  }
 }
}
 
else{
  echo "<script>window.open('register.php?msg=required','_self')</script>";
}
}

//admin update
if (isset($_POST['adminupdate'])) {
  $admin = $_POST['admin'];
  $password = $_POST['password'];
  $lower = $_POST['lower'];
  $higher = $_POST['higher'];
  
  $sql = "UPDATE adminsetting SET admin = '$admin', password = '$password', lower = '$lower', higher = '$higher'  WHERE id = '1'";
  if (mysqli_query($dbcon,$sql)) {
         echo "<script>window.open('dashboard.php?msg=success','_self')</script>";
    }
    else {
      # code...
    }
}


//lower level update
if (isset($_POST['updatend'])) {
  $studentname = $_POST['studentname'];
  $studentregno = $_POST['studentregno'];
  $studentdate = $_POST['studentdate'];
  $studenttopic = $_POST['studenttopic'];
  
  $sql = "UPDATE ndtopics SET studentname = '$studentname', studentregno = '$studentregno', studentdate = '$studentdate', studenttopic = '$studenttopic'  WHERE id = '$id'";
  if (mysqli_query($dbcon,$sql)) {
         echo "<script>window.open('ndrecords.php?msg=success1','_self')</script>";
    }
    else {
      # code...
    }
}



//higher level update
if (isset($_POST['updatehnd'])) {
  $studentname = $_POST['studentname'];
  $studentregno = $_POST['studentregno'];
  $studentdate = $_POST['studentdate'];
  $studenttopic = $_POST['studenttopic'];
  
  $sql = "UPDATE hndtopics SET studentname = '$studentname', studentregno = '$studentregno', studentdate = '$studentdate', studenttopic = '$studenttopic'  WHERE id = '$id'";
  if (mysqli_query($dbcon,$sql)) {
         echo "<script>window.open('hndrecords.php?msg=success1','_self')</script>";
    }
    else {
      # code...
    }
}


//check login
if (isset($_POST['adminLogin'])) {
	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$sql = "SELECT * FROM adminsetting WHERE id = '1'";
  $run = mysqli_query($dbcon,$sql);
  $row = mysqli_fetch_assoc($run);

  $name = $row['admin'];
  $password = $row['password'];
      if ($uname == $name AND $pword == $password) {
        echo "<script>window.open('dashboard.php','_self')</script>";
      }

      else{
       echo "<script>window.open('login.php?msg=error','_self')</script>";
      }


}