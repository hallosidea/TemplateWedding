<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $ucapan_selamat = $_POST['ucapan_selamat'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO t_kirimucapan(nama,alamat,ucapan_selamat) VALUES('$nama','$alamat','$ucapan_selamat')");
        
        // Show message when user added
        // header("Location: index.php");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>