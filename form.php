<?php
    if(isset($_POST['submit']))
    {
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $laporan = $_POST['laporan'];
    }

        // database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dblaporan";
    
        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);
    
        // to ensure that the connection is made
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
    
        // using sql to create a data entry query
        $sql = "INSERT INTO  contactform_entries (id, nama, , laporan) VALUES ('0', '$nama', '$lokasi', '$laporan')";
      
        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Entries added!";
        }
      
        // close connection
        mysqli_close($con);
?>