<?php   

require "_config.php";
$con = connect();
session_start();
$_SESSION["error"] =0;

if(isset($_POST['submit'])){
	
	$name = $_POST["user"];
	$blog = $_POST["blog"];
    $approved = 0;
	if ($name != "" && $blog != "" ){
	$sql_post = "INSERT INTO daily_blogs (name, content, approved) VALUES ('{$name}', '{$blog}', {$approved})";
	$con->query($sql_post);
	$_SESSION["error"]=1;
	header("location: daily_blogs.php");
	
}
else
{
	header("location: daily_blogs.php");	
}
}



?>
