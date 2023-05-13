<?php
    include 'header.php';
?>


<form action="signUp.php" method="POST">
    <div class="form-container">
    <h3>Staff Register</hr>
    <br>
    <br>
    <input type="text" name="userstaff" placeholder="Username"><br>
    <input type="password" name="passstaff" placeholder="Password"><br>
    <input type="submit" class="" value="Register">
    <br>
    <input type="button" class="" value="Return to Login" onclick = staffLog()>
</div>
</form>

</body>
<!--Di ko ma pa gana -Johan-->
<script>
    function staffLog(){
        location.replace("ProjectSAD/stafflogin.html")
    }
</script>
</html>