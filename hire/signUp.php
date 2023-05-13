

    <?php

        include 'header.php';

        if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $stat = $_POST['stat'];


        $sql = "UPDATE `files` SET `filename`='$_POST[firstname]',`status`='$_POST[stat]' WHERE id ='$_POST[username]';";
        mysqli_query($conn, $sql);

        if (mysqli_query($conn, $sql))
    {
        echo 'Successful';
    }
    else
    {
        echo "Error" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
        
       
    
        //header("Location: requestsent.html");
