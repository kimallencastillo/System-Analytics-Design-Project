<?php
    include 'header.php';
?>








<form method="POST" enctype="multipart/form-data">
    <div class="form-container">
        <h1>File format</h1>
    <label>File Name</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
    <p>Filename format (type of file)(employer)</p>
    <i>Example:resumepaolo</i>
</div>
</form>




</body>
</html>

<?php

include 'dbh.php';

if (isset($_POST["submit"]))
 {
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "saddb";  #database name
     
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    
    $db = new PDO("mysql:host=localhost;dbname=saddb","root","");
    
    $sql = "SELECT * FROM files";
    
    $result = mysqli_query($conn,$sql);
    
    $files = mysqli_fetch_all($result);
    
    $file = mysqli_fetch_assoc($result);
     
    if (isset($_POST["submit"]))
     {
         #retrieve file title
            $title = $_POST["title"];
         
        #file name with a random number so that similar dont get replaced
         $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    
         $filename = $_FILES['file']['name'];
     
        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];
        
        $extension = pathinfo($filename,PATHINFO_EXTENSION);
       
         #upload directory path
         $uploads_dir = 'requirements';
    
         #sql query to insert into database
        #if(!in_array($extension,['pdf']))
        #{
         #   echo"Must be PDF";
        #}
        #else{
            if(move_uploaded_file($tname, $uploads_dir.'/'.$pname))
            {
                $sql = "INSERT into files(filename,file,status) VALUES('$title','$pname','Pending')";
    
                if(mysqli_query($conn,$sql)){
     
                    echo "File Sucessfully uploaded";
                    }
                    else{
                        echo "Error";
                    }
    
            }
        }
    }
 
    
#}