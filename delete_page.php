
<?php include('db.php')?>  

<?php


if(isset($_GET['id'])){
    $id =$_GET['id'];
  
$query="DELETE FROM students WHERE id='$id' ";

$result = mysqli_query($conn,$query);

if(!$result){
die("Database connection failed!".mysqli_error($conn));
}else{
    header('location:index.php?delete_message=RECORD DELETED!');
}


}
  
?>