<?php

/*
$host = "localhost";
$user = "root";
$pass = "";
$db   = "imex";
*/
function connect() {
	return mysqli_connect("localhost", "root", "", "odigos");
}

?>