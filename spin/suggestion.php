<?php
require "_config.php";
$con = connect();
session_start();
$_SESSION["errora"] =0;
$_SESSION["errorb"] =0;

if(isset($_POST['adsug'])){
	@$sname = $_POST["yname"];
	@$sdes = $_POST["suggestion"];
	@$cont = $_POST["contact"];
if($sname !="" && $sdes !="" && $cont !="")
{
	$sql = "INSERT INTO suggest (sug_name,sug_desc,contact) VALUES ('{$sname}', '{$sdes}','{$cont}')";
		$con->query($sql);
		
$_SESSION["errora"]=1;
	header("location: index.php");

	
}
$_SESSION["errora"]=1;
	header("location: index.php");
}

else{
$_SESSION["errorb"]=1;
header("location: index.php");
}

?>
