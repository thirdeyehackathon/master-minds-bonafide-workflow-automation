<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$selected=mysql_select_db("application", $con);
	
	$user = $_POST["username"];
	$result = mysql_query("select *from details where staffname='$user'");
	$ret= mysql_query( $result, $con);
	if($ret)
	{
		echo "present";
	}
	while($row = mysql_fetch_array($ret,MYSQL_ASSOC))
	{
		echo "name: {$row['staffname']}";
	}
/*

	while($row = mysql_fetch_array($que,MYSQL_ASSOC))
	{
			if($user==$row["staffname"])
			{
			echo "name :$staffname";
			}
	}
	

	*/
	
	mysql_close($con);	
	
	?>