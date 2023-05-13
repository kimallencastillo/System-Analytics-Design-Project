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
    $userapp = $_POST['userapp'];
    $passapp = $_POST['passapp'];

    $sql="SELECT * FROM applicantdb WHERE usrnmapp='$userapp' AND psswrdapp='$passapp'
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
        include 'lgnerrorapp.html';
        exit();
        
    }
    else{
        $_SESSION['login_user'] = $_POST['userapp']; 

        ?>
          <script type="text/javascript">
            window.location="mainpageapp.php"
          </script>
        <?php
    }
}
?>