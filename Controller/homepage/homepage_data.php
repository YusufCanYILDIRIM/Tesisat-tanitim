<?php 

include 'database.php';


// SQL query to fetch data
$result = mysqli_query($conn, "SELECT * FROM homepage WHERE id = 1");

if ($result) {
    // Veriyi bir dizi olarak almak için mysqli_fetch_assoc kullanın
    $row = mysqli_fetch_assoc($result);

    //homepage table
    $title = $row['title'];
    $description = $row['description'];
    $skill1 = $row['skill1'];
    $skill2 = $row['skill2'];
    $skill3 = $row['skill3'];
    
} else {
    echo "Query failed: " . mysqli_error($conn);
}

?>
