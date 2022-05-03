<?php
    include "config.php";
    $sql="SELECT *from `form2`";
    $result=mysqli_query($con,$sql);
?>
<html>
<body>
    <table align="center" border="1">
        <tr>
            <th>NO.</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <tr>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'];?>">EDIT</a>
                    <td><a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a>
                </tr>
            <?php
                }
            ?>
        </tr>
    </table>
</body>
</html>