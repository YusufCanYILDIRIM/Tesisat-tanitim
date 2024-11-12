<?php

include "database.php";


$result = mysqli_query($conn, "Select * From services");

if($result)
{
    $row = mysqli_fetch_assoc($result);

    //servicespage

    $services_title = $row['title'];
    $services_title2 = $row['title2'];
    $services_title3 = $row['title3'];
    $services_description = $row['description'];
    $services_description2 = $row['description2'];
    $services_description3 = $row['description3'];
}

?>