<?php 
include "database.php";

$result = mysqli_query($conn, "Select * From aboutpage Where id = 1");

if($result)
{
    $row = mysqli_fetch_assoc($result);
    $aboutpage_title = $row['Title'];
    $aboutpage_title2 = $row['Title2'];
    $aboutpage_description = $row['Description'];
    $aboutpage_description2 = $row['Description2'];
}
?>