<?php
    include 'header.php';
?>

<h1>Employer Page</h1>
<a href = index.php class = button1><span>Back</span></a>
<br><br><br><br>
<form action="delete.php" method="POST">
    <input type="text" name="kill" placeholder="Confirm Username">
    <button type="submit" name= "die" class=button1><span>Delete</span></button>
    
</form>


<div class="book-container">
    <?php
        $usrnmemp = mysqli_real_escape_string($conn, $_GET['usrnmemp']);
        $empID = mysqli_real_escape_string($conn, $_GET['empID']);

        $sql = "SELECT * FROM employerdb WHERE usrnmemp='$usrnmemp' AND empID='$empID'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            
                echo "<div class='book-box'>
                <h3>Employer ID: ".$row['empID']."</h3>
                <p>Username: ".$row['usrnmemp']."</p>
                </div>";
            }
        }
    ?>
</div>

</body>
</html>