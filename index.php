<?php
include_once("koneksi.php");
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($conn, $query);
?>


<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <br>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='30%' border="1">
 
    <tr>
        <th>No</th> 
        <th>Nama</th> 
        <th>Alamat</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>