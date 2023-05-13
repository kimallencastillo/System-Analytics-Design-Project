<?php
    include 'header.php';
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search" class=button1><span>Search</span></button>
    
</form>

<h2>Job Openings</h2>

<div class="book-container">
    <?php
        $sql = "SELECT * FROM jobdb";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<a href='jobs.php?jobcode=".$row['jobcode']."&position=".$row['position']."'><div class='book-box'>
                <hr>
                <h3>Job Code: ".$row['jobcode']."</h3>
                <p>Date Posted: ".$row['date']."</p>
                <p>Position: ".$row['position']."</p>
                <p>Employer: ".$row['employer']."</p>
                <p>Description: ".$row['description']."</p>
                <p>Status: ".$row['status']."</p>
                <hr>    
                </div>";
            }
        }
    ?>
</div>

</body>
</html>