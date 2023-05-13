<?php
    include 'header.php';
?>

<h1>Search Page</h1>
<a href = index.php class = button1><span>Back</span></a>
<br><br><br><br>

<div class="book-container">
<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM employerdb WHERE usrnmemp LIKE '%$search%' OR empID LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult == 1) {echo "There is  ".$queryResult." result! ";}
        else if ($queryResult > 1) {echo "There are  ".$queryResult." results! ";}
        else {echo "";}


        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='books.php?usrnmemp=".$row['usrnmemp']."&empID=".$row['empID']."'><div class='book-box'>
                    <h3 style='color:#eaeae8'>Employer ID: ".$row['empID']."</h3>
                    <p style='color:#eaeae8'>Username: ".$row['usrnmemp']."</p>
                </div></a>";
            }
        } else {
            echo "There are no results matching your search";
        }
    }
?>
</div>