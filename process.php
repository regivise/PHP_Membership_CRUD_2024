<?php
include"db.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];


    
    $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

    $result = mysqli_query($conn,$query);

    if($result){
        echo"Record created!";
    }


}



?>