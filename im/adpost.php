<?php
require "_config.php";
$con = connect();
if(isset($_POST['adform'])){
	
	
	@$adtitle=$_POST["adt"];
	@$catid= $_POST["cat"];
	@$addes= $_POST["desc"];
	@$price= $_POST["cost"];
	@$name= $_POST["adname"];
	@$contact=$_POST["con"];
	@$fb_link = $_POST["fb"];
	@$token = uniqid();
	/*upload code starts*/
				$extension=array("jpg","png","jpeg");
			$db_file;
			$success;
		$file_name=$_FILES["image"]["name"];
		$file_tmp=$_FILES["image"]["tmp_name"];
			if ($_FILES["image"]["size"] > 2000000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
					exit(0);
					}
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		$only_name = uniqid();
		$db_name = $only_name.'.jpg';
		$new_name = $only_name.'.'.$ext;
		global $db_file;
		$db_file.= $db_name.',';
		if(in_array($ext,$extension)) {
		if(move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$new_name)) {
			global $success;
			$success = 0;
			#Success
		} else {
			global $success;
			$success = 1;
			#Failed
		}
		}
		if ($success == 0) {
		
			echo("Your image has been uploaded of name ". $new_name);
				} else {
					echo "fail";
				}
/*upload code ends*/
	
	if($adtitle != "" && $addes != "" && $price != "" && $name != "" && $contact != "") {
		$sql = "INSERT INTO adtable (ad_title, category, price, description,pics, name, contact, fb , ad_token) VALUES ('{$adtitle}', {$catid}, {$price}, '{$addes}','{$new_name}', '{$name}', {$contact},'{$fb_link}', '{$token}')";
		$con->query($sql);
		
		$sql_id="SELECT ad_id FROM adtable WHERE ad_token = '{$token}'";
		$sql_res = $con->query($sql_id);
		$sql_row = $sql_res->fetch_assoc();
		$id = $sql_row["ad_id"];
		
		header("location: addes.php?id={$id}&disp={$token}");
	}
}
else{
	header("location: index.php");
}
?>