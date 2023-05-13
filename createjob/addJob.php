

    <?php

include 'header.php';

$date = $_POST['date'];
$position = $_POST['position'];
$employer = $_POST['employer'];
$description = $_POST['description'];


$sql = "INSERT INTO jobdb (date, position, employer, description, status) VALUES ('$date', '$position', '$employer', '$description', 'Available');";
mysqli_query($conn, $sql);

header("Location: index.php?signup=sucess");
