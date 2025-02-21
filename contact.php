<?php 
$localhost="localhost";
$username="root";
$password="";
$database="software_geek";

$connection=mysqli_connect($localhost,$username,$password,$database);

if($connection){
    // echo "successfully connected";
} else{
    echo "not connected";
}
?>