<?php
    include 'header.php';
?>
<html>
<title>Aplication Requirement Submissions</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h2><center>Application Requirements Submissions</center></h2>

<div class="book-container">
<table>
    <thead>
    <tr>
    <th>Applicant Code</th>
    <th>Filename</th>
    <th>File</th>
    <th>Status</th>
    </thead>
    <tbody>
    <?php
         $sql = "SELECT * FROM files";
         $result = mysqli_query($conn, $sql);
         $queryResults = mysqli_num_rows($result);
         while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
        <td align=center><?php echo $row['id']?></td>
        <td align=center><?php echo $row['filename']?></td>
        <td align=center><?php echo $row['file']?></td>
        <td align=center><?php echo $row['status']?></td>
            </tr>
            <?php
        } 
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
