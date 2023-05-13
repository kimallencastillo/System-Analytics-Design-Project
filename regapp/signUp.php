

    <?php

        include 'header.php';

        $userapp = $_POST['userapp'];
        $passapp = $_POST['passapp'];


        $sql = "INSERT INTO applicantdb (usrnmapp,psswrdapp) VALUES ('$userapp','$passapp');";
        mysqli_query($conn, $sql);
    
        header("Location: ../registrysucessapp.html");
