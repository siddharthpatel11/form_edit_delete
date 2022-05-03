<?php
    include "config.php";
   
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=md5($_REQUEST['password']);

    $edit="UPDATE `form2` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'";
    $result=mysqli_query($con,$edit);
    if($result)
    {
        header("location:table.php");
    }
?>