<?php

include './db.php';

$id = $_GET['id'];
// echo $id;

$sql = "SELECT * FROM `blood_resord` where sno='$id'";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
  $sno=$row['sno'];
  $name=$row['donar_name'];
  $bloodGroup=$row['blood_group'];
  $date = $row["dt"];
}

$sql = "INSERT INTO `blood_request` (`sno`, `blood_group`,`name`, `dt`) VALUES ('$sno', '$bloodGroup','$name', current_timestamp())";
$result = mysqli_query($conn, $sql);
header("location: blood_record.php");

?>