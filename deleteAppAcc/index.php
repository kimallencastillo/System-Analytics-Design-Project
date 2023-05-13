<?php
    include 'header.php';
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search" class=button1><span>Search</span></button>
    
</form>

<h2>All Applicants:</h2>

<div class="book-container">
    <?php
        $sql = "SELECT * FROM applicantdb";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<a href='books.php?usrnmapp=".$row['usrnmapp']."&appID=".$row['appID']."'><div class='book-box'>
                <hr>
                <h3>Applicant ID: ".$row['appID']."</h3>
                <p>Username: ".$row['usrnmapp']."</p>
                <hr>    
                </div>";
            }
        }
    ?>
</div>

</body>
</html>