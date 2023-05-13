<?php
    include 'header.php';
?>


<form action="signUp.php" method="POST">
    <div class="form-container">
    <h3>Applicant Register</hr>
    <br>
    <br>
    <input type="text" name="userapp" placeholder="Username"><br>
    <input type="password" name="passapp" placeholder="Password"><br>
    <input type="submit" class="" value="Register">
    <br>
    <input type="button" class="" value="Return to Login" onclick = empLog()>
</div>
</form>

</body>
<!--Di ko ma pa gana -Johan-->
<script>
    function empLog(){
        location.replace("ProjectSAD/emplogin.html")
    }
</script>
</html>