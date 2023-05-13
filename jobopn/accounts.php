<?php
    include 'header.php';
?>

<h1>Book Page</h1>
<a href = index.php class = button1><span>Back</span></a>
<br><br><br><br>

<div class="book-container">
    <?php
        $uname = mysqli_real_escape_string($conn, $_GET['uname']);
        $email = mysqli_real_escape_string($conn, $_GET['email']);

        $sql = "SELECT * FROM membr WHERE uname='$uname' AND email='$email'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            
                echo "<div class='book-box'>
                <h3>Name: ".$row['fname']." ".$row['MI'].". ".$row['lname']."</h3>
                <p>Username: ".$row['uname']."</p>
                <p>Email: ".$row['email']."</p>
                <p>Member ID: ".$row['memid']."</p>
                <p>User Type: ".$row['userType']."</p>
                </div>";
            }
        }
    ?>
</div>

</body>
</html>