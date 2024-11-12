<?php
include "database.php";

$result = mysqli_query($conn, "Select * From testimonial");

if($result)
{
    $row = mysqli_fetch_assoc($result);

    //testimonial
    $testimonial_name = $row['NameSurname'];
    $testimonial_description = $row['Description'];
    $testimonial_ımageurl = $row['ImageUrl'];
}


?>