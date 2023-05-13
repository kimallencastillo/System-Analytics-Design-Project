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
    $userstaff = $_POST['userstaff'];
    $passstaff = $_POST['passstaff'];

    $sql="SELECT * FROM managementdb WHERE usrnmstaff='$userstaff' AND psswrdstaff='$passstaff'
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
       
        include 'lgnerrorstaff.html';
       
    }
    else{
        $_SESSION['staff_user'] = $_POST['userstaff']; 

        ?>
          <script type="text/javascript">
            window.location="mainpagestaff.php"
          </script>
        <?php
    }
}
?>