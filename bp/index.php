<?php
require '_config.php';
$con = connect();
session_start();
$_SESSION["error"] =0;
ini_set('display_errors', 1);
error_reporting(~0);
$ndsearch = null;
if(isset($_POST["nsearch"])) 
	
{
$ndsearch = $_POST["nsearch"];
}
if(isset($_GET["nsearch"]))
{
$ndsearch = $_GET["nsearch"];
}
ini_set('display_errors', 1);
error_reporting(~0);
$sdsearch = null;
if(isset($_POST["ssearch"]))
{
$sdsearch = $_POST["ssearch"];
}
if(isset($_GET["ssearch"]))
{
$sdsearch = $_GET["ssearch"];
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BIET Folks</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel = "stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <style>
        #web{
            font-size : 25px;
        }
        .wrapper {
		text-align: center;
		padding-top:15%;
		background-image: url("profile.jpg");
		padding-bottom: 200px;
	}   
	   .modal-content{background-image:url("pmodal.jpg");
	}
	.modal-header{
		text-align:center;
	}
       </style>
	}
	</head>
	
		
		

	<body>

  <!--Navigation Section-->
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="../index.php" class="navbar-brand" id="web"><b>Odigos</b></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    
                    <ul class="nav navbar-nav">
                        <li  class="active">
                            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                        <li><a href="../abt">About Us</a>
                        
                    </li>
                    
                    <li><a class="dropdown-toggle" data-toggle="dropdown">Exam Time  <span class="caret" ></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../et/notes.php">Notes</a></li>
                        <li><a href="../et/syllabus.php">Syllabus</a></li>
                        <li><a href="../et/paper.php">Exam Papers</a></li>
                    </ul>
                </li>
                
                <li><a href="../hotels">Hotels</a></li>
                <li><a href="../spin">Spin Around</a></li>

            <li>
                <a href = "../db">Daily Blogs
                </a>
                <li>
                    <a href="../im">Imex</a>
                </li>
                <li><a href = "../bp" >BIET Folks</a>
            </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
            <li><a data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions</a></li>
            <li><a href= "../contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a></li>
        </ul>
        <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
        </div>
    </div>
</div>
</nav>
       <br><br> 
<!-- nav section end-->
<!-- Trigger the modal with a button -->
<div class="wrapper">
<h1 Style="font-size:70px;color:white;font-weight:bold;text-shadow: 8px 2px 2px black, 0 0 25px blue, 0 0 5px darkblue;◙">BIET FOLKS</h1>
<h4 style="font-size:40px;color:white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">SEARCH YOUR FELLAS</h4>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view">PROFILES</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#register">REGISTER</button>&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#search">SEARCH</button>
</div>


<!--profile register modal-->
<div class="modal fade modal-md" id="register" role="dialog">
<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header" style="padding:25px 25px;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4><span class="glyphicon glyphicon-user"></span>&nbsp;Details Please</h4>
		</div>
		<div class="modal-body" style="padding:40px 50px;">
			
			
			<form role="form" method="post" action="register.php" enctype="multipart/form-data">
				<!--roll number-->
				<div class="form-group" align="left">
					<label for="roll">
						<!--<span class="glyphicon glyphicon-user"></span>-->
						Roll Number
					</label>
					<input type="text" class="form-control" name="rollno" id="roll" placeholder="1404310010" required="required">
				</div>
				<!--name-->
				<div class="form-group" align="left">
					<label for="name">
						<!--<span class="glyphicon glyphicon-user"></span>-->
						Name
					</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required="required">
				</div>
				<!--year-->
				<div class="form-group" align="left">
					<label for="Category">
						<!--<span class="glyphicon glyphicon-user"></span>-->
						Year
					</label>
					<select name="year" class="form-control">
						<option value = "1">I</option>
						<option value = "2">II</option>
						<option value = "3">III</option>
						<option value = "4">IV</option>
					</select>
				</div>
				<!--branch-->
				<div class="form-group" align="left">
					<label for="Category">
						<!--<span class="glyphicon glyphicon-user"></span>-->
						Branch
					</label>
					<select name="branch" class="form-control">
						<option value = "1">Computer Science</option>
						<option value = "2">Electronics & Commmunication</option>
						<option value = "3">Information Technology</option>
						<option value = "4">Mechanical</option>
						<option value = "5">Civil Enggineering</option>
						<option value = "6">Electrical Enggineering</option>
						<option value = "7">Chemical Enggineering</option>
					</select>
				</div>
				
				<!--photo upload-->
				<div class="form-group" align="left">
					<label for="photo"><!--<span class="glyphicon glyphicon-comment"></span>-->
					&nbsp;Photo
				</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="file" name="image" id="photo" value="pic" required="required">
			</div>
			<!--blood group-->
			<div class="form-group" align="left">
				<label for="bg">
					<!--<span class="glyphicon glyphicon-user"></span>-->
					Blood Group
				</label>
				<input type="text" class="form-control" name="bgroup" id="bg" placeholder="A+,B+" required="required">
			</div>
			
			<!--skills-->
			<div class="form-group" align="left">
				<label for="skill"><!--<span class="glyphicon glyphicon-comment"></span>-->
				&nbsp;Skills
			</label>
			<textarea class="form-control" name="skill" rows="4" id="skill" placeholder="Max length 400 characters" required="required" ></textarea>
		</div>
		<!--active councils-->
		<div class="form-group" align="left">
			<label for="council"><!--<span class="glyphicon glyphicon-comment"></span>-->
			&nbsp;College Councils
		</label>
		<input type="text" name="council" class="form-control" id="council" placeholder="CSC,LSC,TNP,FAH,SSC" required="required">
	</div>
	<!--contact-->
	<div class="form-group" align="left">
		<label for="cont"><!--<span class="glyphicon glyphicon-comment"></span>-->
		&nbsp;Contact
	</label>
	<input type="text" name="cont" class="form-control" id="cont" placeholder="Enter your contact number" required="required">
</div>
<!--fb profile link-->
<div class="form-group" align="left">
	<label for="fb"><!--<span class="glyphicon glyphicon-comment"></span>-->
	&nbsp;Fb profile link
</label>
<input type="text" name="fb" class="form-control" id="fb" placeholder="https://www.facebook.com/anuraj.singh.10" required="required">
</div>
<!--address-->
<div class="form-group" align="left">
<label for="add"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Address
</label>
<input type="text" name="addr" class="form-control" id="add" placeholder="S-1, Kalpana Bhavan, BIET Jhansi" required="required">
</div>
</div>
<!--footer starts-->
<div class="modal-footer">
<button type="submit" name="reg" class="btn btn-success btn-default pull-right">
<span class="glyphicon glyphicon-flag"></span>
Submit
</button>
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
Cancel
</button>
</form>
</div>
</div>
</div>
</div>
<!--profile modal ends-->
<!--view modal -->
<div class="modal fade modal-md" id="view" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="padding:25px 25px;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4><span class="glyphicon glyphicon-envelope"></span>&nbsp;Details Please</h4>
</div>
<div class="modal-body" style="padding:40px 50px;">
<form role="form" method="post" action="view.php" enctype="multipart/form-data">
<!--year-->
<div class="form-group" align="left">
<label for="Category">
<!--<span class="glyphicon glyphicon-user"></span>-->
Year
</label>
<select name="year" class="form-control">
<option value = "1">I</option>
<option value = "2">II</option>
<option value = "3">III</option>
<option value = "4">IV</option>
</select>
</div>
<!--branch-->
<div class="form-group" align="left">
<label for="Category">
<!--<span class="glyphicon glyphicon-user"></span>-->
Branch
</label>
<select name="branch" class="form-control">
<option value = "1">Computer Science</option>
<option value = "2">Electronics & Commmunication</option>
<option value = "3">Information Technology</option>
<option value = "4">Mechanical</option>
<option value = "5">Civil Enggineering</option>
<option value = "6">Electrical Enggineering</option>
<option value = "7">Chemical Enggineering</option>
</select>
</div>
</div>
<div class="modal-footer">
<button type="submit" name="vp" class="btn btn-success btn-default pull-right">
<span class="glyphicon glyphicon-flag"></span>
Submit
</button>
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
Cancel
</button>
</form>
</div>
</div>
</div>
</div>
<!--view profiles end-->
<!--search modal starts-->
<div class="modal fade modal-md" id="search" role="dialog">
<div class="modal-dialog">
<!--modal content-->
<div class = "modal-content">
<div class = "modal-header" style="padding:25px 25px;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h2><span class="glyphicon glyphicon-search"></span>&nbsp;Details Please</h2>
</div>
<!--modal body-->
<div class = "modal-body">
<form action="searchname.php" role="search" class="form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search By Name" name="nsearch"  />
</div>
<div align="right">
<button type="text" class="btn btn-success" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</div>
</form>
<br>
<form action="skillsearch.php" role="search" class="form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search By Skill" name="ssearch"  />
</div>
<div align="right">
<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</div>
</form>
</div>
<!--modal footer-->
<div class = "modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
Cancel
</button>
</div>
</div>
<!--modal content ends-->
</div>
</div>
<!--search modal ends-->
<!--footer starts-->
<!-- contact us -->
<div class="container-fluid" id="footer">

<!--row1-->
<div class="row">
	
	<div class="col-xs-6 col-md-2">
		<div style="color:teal"><h4>Exam Time</h4></div>
		<div><a href="../et/notes.php" style="color:whitesmoke"><h6>Notes</h6></a></div>
		<div><a href="../et/syllabus.php" style="color:whitesmoke"><h6>Syllabus</h6></a></div>
		<div><a href="../et/paper.php" style="color:whitesmoke"><h6>Exam Papers</h6></a></div>
		<div><h4><a href="../bp"  style="color:teal">BIET Profiles</a></h4></div>
	</div>
	
	<div class="col-xs-6 col-md-2">
		
		
		<div style="color:teal"><a href= "../hotels"><h4>Hotels</h4></a></div>
		<div style="color:teal"><h4><a href = "../spin">Spin Around</a></h4></div>
		<div><h4><a href="../im"  style="color:teal">Imex</a></h4></div>
		<div><h4><a href="../db"  style="color:teal">Daily Blogs</a></h4></div>
	</div>
	
	<div class="col-xs-12 col-md-4" align="center" style="color:grey">
		<h4>Copyright © 2016 odigos.in</h4>
		<h4>Disclaimer: This site does not claims any official promises in refrence to any college</h4>
		<h4>follow us on:</h4>
		<a href="https://plus.google.com/u/1/118154884240304805397?hl=en">
			<img src="gp.png">
		</a>&nbsp;&nbsp;
		<a href="https://www.facebook.com/odigosguide/?notif_t=page_fan&notif_id=1471878912551769">
			<img src="fb.png">
		</a>
	</div>
	
	<div class="col-xs-12 col-md-4" align="center" style="color:grey;">
		<h1 id="contact">Contact Us</h1>
		<b><span class="glyphicon glyphicon-envelope"></span>&nbsp;guideodigos@gmail.com</b><br>
		<b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9452056704</b><br>
		<b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9458042329</b><br>
		<b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9675773252</b>
	</div>
</div>

<div class="row" align="center" style="margin-top:2px">
	<div class="col-xs-12 col-md-12">
		<a href="tnc.html" style="color:gray"><b>Terms & Conditions</b></a>
	</div>
</div>
</div>
<!--footer ends-->
</body>
</html>
<!--suggestion modal starts-->
<div class="modal fade modal-md" id="sugmodal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<!--modal header-->
<div class="modal-header" style="padding:25px 25px;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4><span class="glyphicon glyphicon-paperclip"></span>&nbsp;Give Your Suggestion!!</h4>
</div>
<!--modal header ends-->
<!--modal body starts-->
<div class="modal-body" style="padding:40px 50px;">
<form role="form" method="post" action="suggestion.php" enctype="multipart/form-data">
<!--name-->
<div class="form-group" align="left">
<label for="name">
<span class="glyphicon glyphicon-user"></span>
Your Name
</label>
<input type="text" class="form-control" name="yname" id="name" placeholder="Enter your name" required="required">
</div>
<!--suggestion-->
<div class="form-group" align="left">
<label for="suggest"><span class="glyphicon glyphicon-comment"></span>
&nbsp;Suggestion
</label>
<textarea class="form-control" name="suggestion" rows="6" id="suggest" placeholder="Max length 500 characters" required="required" ></textarea>
</div>
<!--contact-->
<div class="form-group" align="left">
<label for="conta">
<span class="glyphicon glyphicon-phone"></span>
Your Contact
</label>
<input type="text" class="form-control" name="contact" id="conta" placeholder="Enter your contact/FB profile link/Email" required="required">
</div>
<div class="modal-footer">
<button type="submit" name="adsug" class="btn btn-success btn-default pull-right">
<span class="glyphicon glyphicon-flag"></span>
Submit
</button>
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
Cancel
</button>
</form>
</div>
</div>
<!--modal body ends-->
</div>
</div>
<!--suggestion modal ends-->
<?php
if($_SESSION["errora"])
{echo '<script type="text/javascript">',
'alert("Thanks!! Submitted successfully")',
'</script>'
;
$_SESSION["errora"] = 0;
}
?>
<?php
if($_SESSION["errorb"])
{echo '<script type="text/javascript">',
'alert("Submission Error!!!")',
'</script>'
;
$_SESSION["errorb"] = 0;
}
?>