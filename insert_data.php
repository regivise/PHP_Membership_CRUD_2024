<?php
include("db.php");

if(isset($_POST['add_student'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    
    $first_name = mysqli_real_escape_string($conn,$first_name);
    $last_name = mysqli_real_escape_string($conn,$last_name);
     $age = mysqli_real_escape_string($conn,$age);

if($first_name == "" || empty($first_name)){
    header('location:index.php?message=Your first name is required!');
}else{
    $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query failed").mysqli_errno($conn);
    }else{
        header('location:index.php?insert_message=Record created successfuly');
    }

}

}


?>