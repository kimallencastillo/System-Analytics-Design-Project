<?php
    include 'header.php';
?>

<h1>Delete Page</h1>
<a href = index.php class = button1><span>Back</span></a>
<br><br><br><br>

<div class="book-container">
<?php
    if(isset($_POST['die']))
    {
        $kill = $_POST['kill'];
    
        $delete_query = "DELETE from applicantdb where usrnmapp ='$_POST[kill]';";
    
        if (mysqli_query($conn, $delete_query))
        {
            echo 'Successful';
        }
        else
        {
            echo "Error" . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
</div>