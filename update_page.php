<?php include('header.php')?>
<?php include('db.php')?>  

<?php

//get form data
if(isset($_GET['id'])){

    $id= $_GET['id'];

   
        $query="SELECT * FROM `students` where `id`='$id' ";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Failed!".mysqli_error($conn));
        }else{
            
            $row = mysqli_fetch_assoc($result);

      

                }
}
?> 

<?php
//update form logic

if(isset($_POST['update_student'])){

    if(isset($_GET['id_new'])){
            $id_new = $_GET['id_new'];
    }

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];

$first_name = mysqli_real_escape_string($conn,$first_name);
$last_name = mysqli_real_escape_string($conn,$last_name);
$age = mysqli_real_escape_string($conn,$age);

$query="UPDATE students SET first_name='$first_name', last_name='$last_name', age = '$age' WHERE id = $id_new";
$result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Failed!".mysqli_error($conn));
        }else{
            header('location:index.php?update_msg=Record updated successfuly!');
        }

}



?>

<form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'];?>">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'];?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age'];?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
</form>










<?php include('footer.php')?>   