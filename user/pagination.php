<?
$link=mysqli_connect("localhost","root","yashikakhurana");
mysqli_select_db($link,"scart2");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Untitled</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="pagination/css/pagination.css" rel="stylesheet" type ="text/css">
	<link href="pagination/css/A_green.css" rel="stylesheet" type ="text/css">


</head>
<body>

<?php 

	include("pagination/function.php");

	$page =(int)(!isset($_GET["page"])? 1:$_GET["page"]);
	$limit = 5;
	$startpoint = ($page * $limit)-$limit;

	$statement= "table1 order by name asc";

	$res= mysqli_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
	while($row = myqli_fetch_array($res))
	{
		echo $row["name"];
		echo "<br>";

	}

 ?>

<?php
	echo"<div id='pagingg'>";
	echo pagination($statement ,$limit, $page);
	echo "</div>";

?>


</body>
</html>