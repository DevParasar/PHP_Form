<?php

include "dbConn.php"; 

$id = $_GET['id']; 

$del = mysqli_query($db,"delete from tblemp where id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:all_records.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>