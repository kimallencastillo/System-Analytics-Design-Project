

    <?php

include 'header.php';

$name = $_POST['name'];
$age = $_POST['age'];
$talent = $_POST['talent'];


$sql = "INSERT INTO applicationformdb (name, age, talent, status) VALUES ('$name', '$age', '$talent', 'Pending');";
mysqli_query($conn, $sql);

header("Location: index.php?signup=sucess");


