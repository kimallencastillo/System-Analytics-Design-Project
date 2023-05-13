<?php
    include 'header.php';
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search" class=button1><span>Search</span></button>
    
</form>

<h2>All Employers:</h2>

<div class="book-container">
    <?php
        $sql = "SELECT * FROM employerdb";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<a href='books.php?usrnmemp=".$row['usrnmemp']."&empID=".$row['empID']."'><div class='book-box'>
                <hr>
                <h3>Employer ID: ".$row['empID']."</h3>
                <p>Username: ".$row['usrnmemp']."</p>
                <hr>    
                </div>";
            }
        }
    ?>
</div>

</body>
</html>