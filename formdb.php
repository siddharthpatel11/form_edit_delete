<?php
    include "config.php";
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=md5($_REQUEST['password']);

    $insert="INSERT INTO `form2` (`id`,`name`,`email`,`password`) VALUE ('$id','$name','$email','$password')";

    $res=mysqli_query($con,$insert);

    if($res == TRUE)
    {
        header("location:form.php");
    }
    else
    {
        echo"<script>alert('no');</script>";
    }
?>