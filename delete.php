<?php
    include "config.php";
    $id=$_REQUEST['id'];
    $delete="DELETE from `form2` WHERE `id`='$id'";
    $result=mysqli_query($con,$delete);

    if($result)
    {
        header("location:table.php");
    }
?>