<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>User info</title>
	<style>
       table, th, td {
       border: 1px solid black;
}
    </style>
</head>
<body>
	<?php
    session_start();
    if(!isset($_SESSION['simple_login'],$_SESSION['pass_login'])){
        header("Location: index.php");
        exit();
    }
    ?>
	<h1 align="center">User login info info</h1><hr><br>
	        <button type="button" value="Logout" style="float: right;"><a href="logoutaction.php">Logout</button>
	        <button type="button" value="" style="float: right;"><a href="home.php">Home</a></button><br><br>
		<form>
	        	<table align="center" style="width:100%" >
	        		<tr>
	        			<th>SL.</th>
	        			<th>User name</th>
	        			<th>Password</th>
	        		</tr>
	        		<tr>
	        			<td>1</td>
	        			<td><?php echo $_SESSION['simple_login']; ?></td>
	        			<td><?php echo $_SESSION['pass_login']; ?></td>
	        		</tr>
	        		<tr>
	        			<td>2</td>
	        			<td></td>
	        			<td></td>
	        		</tr>
	        	</table>
		</form>
</body>
</html>