


      <?php  
     session_start();
 $year = $_POST["year"];
 $branch = $_POST["branch"];
 $year = refinedData($year);
 $branch = refinedData($branch);
 $server = "localhost";
        
	$response = mysql_connect("localhost" , "root","");
	if(!$response){  
		echo "unable to connect to server";
		exit;
	}
	$db = mysql_select_db("odigos", $response);
	if(!$db){ 
		echo "unable to connect to database";
		exit;
	}
	function refinedData($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripslashes($data);
		return $data;
	} 
	authencityCheck($year , $branch);
	function authencityCheck($year , $branch){
		global $response;
		
	
		$sql = "SELECT SID FROM syllabus WHERE year='$year' AND branch='$branch'";
		$result = mysql_query($sql , $response);
		if(!$result){
			echo "Server Error!!";
			exit;
		}
		$rowCount = mysql_num_rows($result);
		if($rowCount == 1){    
			header("Location: syllabus/$year/$branch.pdf");
		}
		else{  

		        $_SESSION["errorc"]	= 1 ; 
		   header("location:syllabus.php") ;
      
     }
    
		}
		
	 
	?>
      
     