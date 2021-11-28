<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        
        // include database connection file
        include_once("koneksi.php");

                
        // Insert user data into table
        $query = "INSERT INTO tb_mahasiswa (id, nama, alamat) VALUES ('','$nama','$alamat')";
        $result = mysqli_query($conn, $query);
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>