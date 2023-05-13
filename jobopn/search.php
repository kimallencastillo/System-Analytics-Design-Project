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
        $sql = "SELECT * FROM membr WHERE uname LIKE '%$search%' OR fname LIKE '%$search%' OR MI LIKE '%$search%' OR lname LIKE '%$search%' OR email LIKE '%$search%' OR memid LIKE '%$search%' OR userType LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult == 1) {echo "There is  ".$queryResult." result! ";}
        else if ($queryResult > 1) {echo "There are  ".$queryResult." results! ";}
        else {echo "";}


        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='accounts.php?uname=".$row['uname']."&email=".$row['email']."'><div class='book-box'>
                    <h3 style='color:#eaeae8'>Name: ".$row['fname']." ".$row['MI'].". ".$row['lname']."</h3>
                    <p style='color:#eaeae8'>Username: ".$row['uname']."</p>
                    <p style='color:#eaeae8'>Email: ".$row['email']."</p>
                    <p style='color:#eaeae8'>Member ID: ".$row['memid']."</p>
                    <p style='color:#eaeae8'>User Type: ".$row['userType']."</p>
                </div></a>";
            }
        } else {
            echo "There are no results matching your search";
        }
    }
?>
</div>