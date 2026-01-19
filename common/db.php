<?php



$host="localhost";
$username="root";
$password="";
$database="discuss";

$conn= new mysqli($host,$username,$password,$database);

if($conn->connect_error){

    die("not comected with DB".$conn->connect_error);

}



?>