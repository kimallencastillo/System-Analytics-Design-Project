<?php
    include 'header.php';
?>








<form action="addJob.php" method="POST">
    <div class="form-container">
    <input type="text" name="appID" placeholder="appID"><br>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="text" name="talent" placeholder="Talent"><br>
    <input type="text" name="requirements" placeholder="Requirements"><br>
    <input type="text" name="title" placeholder="Title"><br>
    <button type="submit" name="submit" class=button1><span>Create Job</span></button>
</div>
</form>




</body>
</html>