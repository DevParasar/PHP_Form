<?php
include "dbConn.php"; 

if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];

    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`fullname`, `age`) VALUES ('$fullname','$age')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
        header("location:all_records.php");
    }
}

mysqli_close($db); 
?>