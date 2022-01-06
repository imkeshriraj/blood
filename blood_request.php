<?php require './hospital_header.php' ;

include './db.php';
?>

<div class="container">
<h1>Blood request</h1>

<table class="table">
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
      <?php

$sql = "SELECT * FROM `blood_request`";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
  $sno=$row['sno'];
  $name=$row['name'];
  $bloodGroup=$row['blood_group'];
  $date = $row["dt"];



    echo '
<tr>
<td>'.$sno.'</td>
<td>'.$name.'</td>
<td>'.$bloodGroup.'</td>
<td>'.$date.'</td>
<td><a href="#"><button class="btn btn-danger">Confirm</button></a></td>
</tr>';
}
?>
</table>
</div>