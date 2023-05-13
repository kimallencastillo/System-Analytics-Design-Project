

    <?php

        include 'header.php';

        $useremp = $_POST['useremp'];
        $passemp = $_POST['passemp'];


        $sql = "INSERT INTO employerdb (usrnmemp,psswrdemp) VALUES ('$useremp','$passemp');";
        mysqli_query($conn, $sql);
    
        header("Location: ../registrysucessemp.html");
