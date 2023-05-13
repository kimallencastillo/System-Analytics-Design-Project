<?php
session_start();
?>
<html>

	<head>
		<title>DANASAN Online</title>
		<link rel="stylesheet" type="text/css" href="styleMain.css?v=<?php echo time(); ?>">
	</head>
	<body style="background-color:#eaeae8;">
		
		
		<iframe src = default.php align = right name = subwin width = 70% height = 600px border = 0 id = frame></iframe>
		<br>
		<img src = 'manpower-logo.png' width = 200 height = 200 id = logo><br>

		<table width="100%" cellspacing= 3 style = 'position:absolute;top:70;left:280'>
        <?php
		if (isset($_SESSION['login_user']));
        ?>
			<tr>
			<td align = left id = hdg><h3>DANASAN<br>
			<h3 id = subtitle>Manpower Services and Management</h3>
            <p><font size = 5>Management Homepage <?php
            echo "Welcome Staff ".$_SESSION['staff_user'];
            ?>	</p>		
           	
		</table>
		<br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
		<br><br><br><br>
		<a href = jobopn\index.php target = subwin class = button1><span>Job Openings</span></a><br><br>
		<a href = status\index.php target = subwin class = button2><span>Applications</span></a><br>
		<a href = deleteAppAcc\index.php target = subwin class = button3><span>Delete Applicant Accounts</span></a><br>
		<a href = deleteEmpAcc\index.php target = subwin class = button4><span>Delete Employer Accounts</span></a><br>
		<a href = Homepage.html  class = button8><span>Sign Out</span></a><br><br><br>
	</body>
</html>