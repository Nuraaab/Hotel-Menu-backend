<?php

$host= "localhost";
$username = 'root';
$password ='';
$dbname = "amazon";
$conn = new mysqli($host,$username,$password,$dbname);

if($conn){
  // echo "success";
}
else{
  //   echo "fail";
}

?>