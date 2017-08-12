<?php
require "_config.php" ;
$con = connect();
session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
		<link rel="stylesheet" href="about.css"/>
		<link rel = "stylesheet" href="footer.css"/>
		
		<style>

		.quote{
			font-family: "Satisfy", serif;
			color : white;
			font-size : 30px;
			
		}

		.thought{
			font-family: "Lobster", serif;
			color : white;
			font-size : 35px;
				}
		#web{
			font-size : 25px;
		}
		</style>
		
		
	</head>
	<body>
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
<!-- nav section end-->
<br><br><br>
<!-- about odigos -->
<div class="container-fluid" align="center" style="margin-bottom:50px">
<div class="row">
	
	<div class="col-md-3">
		<img src="ab_img/odigos.png" class="img-responsive" height="180px">
		<div id="odi">Odigos</div>
	</div>
	<div class="col-md-9 quote"><br>
	<p> "Odigos is a greek word which means a guide ,a helper so mainly website focus on new  student coming to a new city in hope to find a better place and a better experience.Odigos is not just a website , it's an initiative to take your whole college experience online. It was an idea that struck us in January 2K16, it was a great experince working on ODIGOS , working for the students of BIET . Making of ODIGOS was fun , late night codings , discussions and conclusions. " </p>
	</div>
	
</div>
</div>
<!-- quote-->



<div class="container-fluid" style="margin-bottom:50px">
<div class="row">
	<div class="col-md-12 thought" align= "center">
		"Coming together is a beginning, Keeping together is progress, Working together is success."
	</div>
</div>
</div>
<hr>

<!--team-->
<div class="container-fluid" align="center" style="margin-bottom:20px">
<h1 id="team">DEVELOPERS</h1>
</div>

<div class="container">
<div class="row" id="dev">
	
	<div class="col-xs-12 col-md-4" align="center">
		<div class="fill">
			<img src="ab_img/abhi.jpg" alt="abhishek">
		</div>
		<div id="name"><h2>Abhishek Dwivedi</h2></div>
		<div id="follow">
			<a href="https://www.facebook.com/d.abhishek03">
				<img src="ab_img/fb.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.linkedin.com/in/abhishek-dwivedi-a330a0b4">
				<img src="ab_img/li.png">
			</a>&nbsp;&nbsp;
			<a href="https://plus.google.com/113900231296083878522">
				<img src="ab_img/gp.png">
			</a>
		</div>
	</div>
	
	
	<div class="col-xs-12 col-md-4" align="center">
		<div class="fill">
			<img src="ab_img/ankit.jpg" alt="ankit">
		</div>
		<div id="name"><h2>Ankit Sharma</h2></div>
		<div id="follow">
			<a href="https://www.facebook.com/profile.php?id=100003604141055&fref=ufi">
				<img src="ab_img/fb.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.linkedin.com/in/ankit-sharma-9b600410b">
				<img src="ab_img/li.png">
			</a>&nbsp;&nbsp;
			<a href="https://plus.google.com/u/0/106373746361945588720/">
				<img src="ab_img/gp.png">
			</a>
		</div>
	</div>
	
	
	<div class="col-xs-12 col-md-4" align="center">
		<div class="fill">
		<img src="ab_img/prajwal.jpg" alt="prajwal"></div>
		<div id="name"><h2>Prajwal Singh</h2></div>
		<div id="follow">
			<a href="https://www.facebook.com/Jazz.prajwal">
				<img src="ab_img/fb.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.linkedin.com/in/prajwal-singh-90145b86">
				<img src="ab_img/li.png">
			</a>&nbsp;&nbsp;
			<a href="https://plus.google.com/u/1/112746539542140623517">
				<img src="ab_img/gp.png">
			</a>
		</div>
	</div>
	
</div>
</div>
<hr>
<!--support team-->
<div class="container-fluid" align="center" style="margin-bottom:20px">
<h1 id="support">SUPPORT TEAM</h1>
</div>

<div class="container">
<div class="row" id="dev">
	<div class = "col-md-2">
	</div>
	<div class="col-xs-12 col-md-4" align="center">
		<div class="fill">
			<img src="ab_img/bhumika.jpg" alt="bhumika">
		</div>
		<div id="name"><h2>Bhumika Chaudhary</h2></div>
		<div id="follow">
			<a href="https://www.facebook.com/bhumika.chaudhary.184?fref=ts">
				<img src="ab_img/fb.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.facebook.com/d.abhishek03">
				<img src="ab_img/li.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.facebook.com/d.abhishek03">
				<img src="ab_img/gp.png">
			</a>
		</div>
	</div>
	
	
	<div class="col-xs-12 col-md-4" align="center">
		<div class="fill">
			<img src="ab_img/sunil.jpg" alt="sunil">
		</div>
		<div id="name"><h2>Sunil Tripathi</h2></div>
		<div id="follow">
			<a href="https://www.facebook.com/sunil.tripathi.33?fref=ts">
				<img src="ab_img/fb.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.facebook.com/d.abhishek03">
				<img src="ab_img/li.png">
			</a>&nbsp;&nbsp;
			<a href="https://www.facebook.com/d.abhishek03">
				<img src="ab_img/gp.png">
			</a>
		</div>
	</div>
	<div class = "col-md-2">
	</div>
</div>
</div>
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
			<img src="ab_img/gp.png">
		</a>&nbsp;&nbsp;
		<a href="https://www.facebook.com/odigosguide/?notif_t=page_fan&notif_id=1471878912551769">
			<img src="ab_img/fb.png">
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
				<label for="contact">
					<span class="glyphicon glyphicon-phone"></span>
					Your Contact
				</label>
				<input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact/FB profile link/Email" required="required">
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
</body>
</html>