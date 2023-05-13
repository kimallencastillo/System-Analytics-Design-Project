<?php
    include 'header.php';
?>








<form action="signUp.php" method="POST">
    <div class="form-container">
    <h3>Fill up the following information</hr><br>
    <input type="text" name="username" placeholder="Application ID"><br>
    <input type="text" name="firstname" placeholder="Filename"><br>
    <input type="text" name="stat" placeholder="Status"><br>
    
    <button type="submit" name="submit" class=button1><span>Send Status</span></button>
    <br><br><br><br><br>
    <i>Please Enter Approved or Rejected in the Status</i>
    
</div>
</form>



</body>
</html>