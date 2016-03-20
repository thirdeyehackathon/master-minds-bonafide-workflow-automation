<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('could not connect:' . mysql_error());
	}
	$selected = mysql_select_db("application",$con);
	$studname=$_POST['name'];
	$rollno=$_POST['roll'];
	$department=$_POST['dept'];
	$year1=$_POST['year'];
	$email=$_POST['email'];
	$gender=$_POST['gen1'];
	$address=$_POST['addrs'];
	$categories=$_POST['day'];
	$purpose=$_POST['purp'];
	$staffname=$_POST['staffname'];
	$ins="insert into details(name,rollno,department,year,email,gender,address,category,purpose,staffname)values('$studname','$rollno','$department','$year1','$email','$gender','$address','$categories','$purpose','$staffname')";
	$ins1=mysql_query($ins,$con);

	if($ins1)
	{
		print"Data inserted";
	}
	else
	{
		print"Data is not inserted";
	}
?>
	
