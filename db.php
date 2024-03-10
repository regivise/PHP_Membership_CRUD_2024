<?php

define("HOSTNAME","localhost");
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','members_crud');


 $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

 global $conn;


 if(!$conn){
     die("DATABASE CONNECTION FAILED!");
 }
?>