

    <?php

        include 'header.php';

        $userstaff = $_POST['userstaff'];
        $passstaff = $_POST['passstaff'];


        $sql = "INSERT INTO managementdb (usrnmstaff,psswrdstaff) VALUES ('$userstaff','$passstaff');";
        mysqli_query($conn, $sql);
    
        header("Location: ../registrysucessstaff.html");
