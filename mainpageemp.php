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
            <p><font size = 5>Employer Homepage <?php
            echo "Welcome Employer ".$_SESSION['emp_user'];
            ?>	</p>		
           	
		</table>
		<br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
		<br><br><br><br>
		<a href = createjob\index.php target = subwin class = button1><span>Create Job Opening</span></a><br><br>
		<a href = status\index.php target = subwin class = button2><span>Application</span></a><br>
		<a href = hire\index.php target = subwin class = button3><span>Send Application Status</span></a><br>
		<a href = editjob\index.php target = subwin class = button4><span>Edit Job Openings</span></a><br>
		<a href = jobopn\index.php target = subwin class = button8><span>View Job Openings</span></a><br>
		<a href = Homepage.html class = button9><span>Sign Out</span></a><br>
	</body>
</html>