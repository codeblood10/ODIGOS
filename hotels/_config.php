<?php

/*
$host = "localhost";
$user = "root";
$pass = "";
$db   = "hotel";
*/
function connect() {
	return mysqli_connect("localhost", "root", "", "odigos");
}

?>