<?php


if(isset($_POST['reg']))
{
	$p_roll = $_POST["rollno"];
	$p_name = $_POST["name"];
	$p_year = $_POST["year"];
	$p_bch = $_POST["branch"];
	$p_bg = $_POST["bgroup"];
	$p_sk = $_POST["skill"];
	$p_cocl = $_POST["council"];
	$p_addr = $_POST["addr"];
	$p_cont = $_POST["cont"];
	$p_fb = $_POST["fb"];
	$app = 0;
	$token = uniqid();
	/*upload code starts*/
				$extension=array("jpg","png","jpeg");
			$db_file;
			$success;
		$file_name=$_FILES["image"]["name"];
		$file_tmp=$_FILES["image"]["tmp_name"];
			if ($_FILES["image"]["size"] > 1000000) {
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
	if($p_roll != "" && $p_name != "" && $p_bg != "" && $p_sk != "" && $p_cocl != "" && $p_addr != "" && $p_cont != ""  ){
			$sql="INSERT INTO profile (roll_no, name , year , branch , bld_grp , skill , act_co , address , pic , fb , p_token , approved ) VALUES({$p_roll} ,'{$p_name}' ,{$p_year} ,{$p_bch} , '{$p_bg}' ,'{$p_sk}' ,'{$p_cocl}' ,'{$p_addr}', '{$new_name}' , '{$p_fb}' ,'{$token}' , {$app})";
			$con->query($sql);

			$sql_p ="SELECT roll_no FROM profile WHERE p_token='{$token}'";
			$sql_res = $con->query($sql_p);
			$sql_row = $sql_res->fetch_assoc();
			$id = $sql_row["roll_no"];
			header("location: tempro.php?id={$id}&disp={$token}");


	}
	else
	{
	header("location: index.php");	
	}

}
?>