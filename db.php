<?php
$server="localhost";
$username="root";
$password="";
$database="blood";

$conn =mysqli_connect($server,$username,$password,$database);
if($conn){
    // echo 'success';

}
else{
    echo 'Connection not established';
}


?>