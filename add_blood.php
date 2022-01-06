<?php require './header.php' ?>

<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
  header("location:index.php");
  exit;
}

?>


<?php
include './db.php' ;

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name=$_POST['user_name'];
    $bloodGroup=$_POST['blood_group'];
    // $phone=$_POST['phone'];
    

    $sql="INSERT INTO `blood_resord` (`blood_group`, `donar_name`,  `dt`) 
    VALUES ('$bloodGroup', '$name',  current_timestamp())";
    $result=mysqli_query($conn,$sql);

    if($result){
      echo'<div class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Post has been submited.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
  else{
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Failed!</strong> Your concern has not been submited.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }

}



?>
<div class="container mt-4">
<form method="POST" action="./add_blood.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input type="text" class="form-control" name="user_name" id="exampleFormControlInput1" placeholder="eg.Sultan ali khan">
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Select Blood Group</label>
    <select class="form-control" id="exampleFormControlSelect1" name="blood_group">
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>O+</option>
      <option>O-</option>
      <option>AB+</option>
      <option>AB-</option>
    </select>
  </div>
  
  <button class="btn btn-danger">Add Blood</button>
</form>
</div>