<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

extract($_POST);

if(isset($_POST['btn'])){
$con=mysqli_connect('localhost','root','','employ');
$query="insert into employee values('$id','$name','$city')";
$res=$con->query($query);
if($res){
	
	echo json_encode('insert successfullyyy...');
	
	}
	else
	{
	
	echo json_encode('insert not successfullyyy...');
	
	}
	}
?>
</body>
</html>