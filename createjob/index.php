<?php
    include 'header.php';
?>








<form action="addJob.php" method="POST">
    <div class="form-container">
    <input type="date" name="date" placeholder="Date Posted"><br>
    <input type="text" name="position" placeholder="Position"><br>
    <input type="text" name="employer" placeholder="Employer"><br>
    <input type="text" name="description" placeholder="Description"><br>
    <button type="submit" name="submit" class=button1><span>Create Job</span></button>
</div>
</form>




</body>
</html>