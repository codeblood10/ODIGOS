<?php

/*
$host = "localhost";
$user = "root";
$pass = "";
$db   = "odigos";
*/
function connect() {
	return mysqli_connect("localhost", "root", "", "odigos");
}

?>