

    <?php

include 'header.php';

$appID = $_POST['appID'];
$name = $_POST['name'];
$age = $_POST['age'];
$talent = $_POST['talent'];
$requirements = $_POST['requirements'];
$title = $_POST['title'];


$sql = "INSERT INTO applicationformdb (appID, name, age, talent, requirements, title, status) VALUES ('$appID', '$name', '$age', '$talent', '$requirements', '$title', 'Pending');";
mysqli_query($conn, $sql);

header("Location: index.php?signup=sucess");
