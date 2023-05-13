<?php
    include 'header.php';
?>

<h1>Job Page</h1>
<a href = index.php class = button1><span>Back</span></a>
<br><br><br><br>

<div class="book-container">
    <?php
        $jobcode = mysqli_real_escape_string($conn, $_GET['jobcode']);
        $position = mysqli_real_escape_string($conn, $_GET['position']);

        $sql = "SELECT * FROM jobdb WHERE jobcode='$jobcode' AND position='$position'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            
                echo "<div class='book-box'>
                <h3>Job Code: ".$row['jobcode']."</h3>
                <p>Date Posted: ".$row['date']."</p>
                <p>Position: ".$row['position']."</p>
                <p>Employer: ".$row['employer']."</p>
                <p>Description: ".$row['description']."</p>
                <p>Status: ".$row['status']."</p>
                </div>";
            }
        }
    ?>
</div>

</body>
</html>