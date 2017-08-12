 <?php  
     session_start();
 $year = $_POST["year"];
 $paper= $_POST["paper"];
 $year = refinedData($year);
 $paper = refinedData($paper);
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
	authencityCheck($year , $paper);
	function authencityCheck($year , $paper){
		global $response;
		
	
		$sql = "SELECT PID FROM year1,paper WHERE year='$year' AND paper='$paper'";
		$result = mysql_query($sql,$response);
		if(!$result){
			echo "Server Error!!";
			exit;  
		}  
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		$rowCount = mysql_num_rows($result);
		if($rowCount == 1  ){  
		   if($row['PID']<=13&&$year=="I")    
			{header("Location: paper/$year/$paper.pdf");} 
		  else if($row['PID']>13&&$row['PID']<=40&&$year=="II")
		   {	header("Location: paper/$year/$paper.pdf"); } 
		  else if ( $row['PID']>40&&$year=="III")
		  {  header("Location: paper/$year/$paper.pdf"); }  
		else 
			{
		      $_SESSION["errord"]= 1 ; 
		     header("location:paper.php") ; }
		}
		else{ 
			  
		      $_SESSION["errord"]= 1 ; 
		     header("location:paper.php") ;
      
     }
    
		}
		
	 
	?>