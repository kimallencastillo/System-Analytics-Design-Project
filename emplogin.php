<?php
$server_name="localhost";
$username="root";
$password="";
$database_name='saddb';
session_start();
$conn= mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['login']))
{
    $useremp = $_POST['useremp'];
    $passemp = $_POST['passemp'];

    $sql="SELECT * FROM employerdb WHERE usrnmemp='$useremp' AND psswrdemp='$passemp'
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
       
        include 'lgnerroremp.html';
       
    }
    else{
        $_SESSION['emp_user'] = $_POST['useremp']; 

        ?>
          <script type="text/javascript">
            window.location="mainpageemp.php"
          </script>
        <?php
    }
}
?>