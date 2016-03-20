<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("login", $con);
	 
	$user = $_POST["username"];
	$passwd = $_POST["password"];
	
	$result = mysql_query("SELECT * FROM verify WHERE name='$user' AND 
		pasword = '$passwd'");

	$login_success = 0;
	
	if($result === FALSE ) {
		die(mysql_error());
	}
	
	while($row = mysql_fetch_array($result))
	{
		$login_success = 1;
	}

	mysql_close($con);	
	
	if ($login_success == 1) {
		header('Location:appfrom.html');
	} else {
		echo "Login Failed";
	}
?>