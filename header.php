
<?php


if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
  $loggedin=true;
  
}
else{

  $loggedin=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<body>

<?php

echo
'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="./index.php">Aman Blood Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./blood_record.php">Blood Record</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="hospital.php">Hospital</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./add_blood.php">Add Blood</a>
                </li>               
            </ul>
            ';
            ?>
            <?php
            if($loggedin){
            echo'
            <div class="mx-2 row">
            <a class="btn btn-outline-danger" href="signup.php">Sign up</a>
            </div>
            <div class="mx-2">
            <a class="btn btn-outline-danger my-2" href="login.php">Log in</a>
            </div>';}
            // if(!$loggedin){
                echo'
            <div class="mx-2">
            <a class="btn btn-outline-danger" href="logout.php">Logout</a>
            </div>
            ';
            // }
            ?>
            </div>
            </nav>
            </html>
    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>