<?php
    include "config.php";
    $id=$_REQUEST['id'];
    $sql="SELECT *from `form2` WHERE `id`='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
?>
<html>
<body>
<form method="post" action="editac.php?id=<?php echo $row['id'];?>"> 
    <table>
        <tr>
            <td>NAME:</td>
            <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
        </tr>
        <tr>
            <td>EMAIL:</td>
            <td><input type="email" name="email" value="<?php echo $row['email'];?>" ></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" value="<?php echo $row['password'];?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
    </table>
</from>
</body>
</html>