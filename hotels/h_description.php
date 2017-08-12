<?php
require "_config.php";
$con = connect();
session_start();
if(isset($_GET['id']))
{

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotel Description</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap online -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

        <!-- Bootstrap offline --
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <!--end-->

        <link rel="stylesheet" href="h_description.css"/>
        <link rel = "stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		 <style>
        #web{
            font-size : 25px;
        }
       </style>	
	</head>
	
<body>
     
        <?php
		$hid = $_GET['id'];
        $sql = "SELECT * FROM hotels WHERE hotel_id = $hid  ";
        $sql_res = $con->query($sql);
        if($sql_res->num_rows >0){
			$sql_row = $sql_res-> fetch_assoc();
		    $id = $sql_row["hotel_id"];
		    $hname = $sql_row["name"];
		    $loc = $sql_row["address"];
		    $img1 = $sql_row["pic1"];
		    $img2 = $sql_row["pic2"];
			$img3 = $sql_row["pic3"];
		    $contact = $sql_row["contact"];
			$hps = $sql_row["description"];
			$note = $sql_row["notice"];
			$menu = $sql_row["menu"];
			$map = $sql_row["map"];
			$offer = $sql_row["offer"];
			$spec1 = $sql_row["spec1"];
			$spec2 = $sql_row["spec2"];
			$spec3 = $sql_row["spec3"];
			$spec4 = $sql_row["spec4"];
			$spec5 = $sql_row["spec5"];
		
        ?> 


    <div class="container-fluid" style="padding-bottom:5px; padding-top:5px; padding-left:0px; padding-right:0px">
		<div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <img src="h_img/food2.jpg" height="70px" width="120px" align="left">
            </div>  
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding-left:0px">
				<p class="power">Powered by</p>
				<p class="logo">ODIGOS</p>
				<p class="hr">Hotels & Restraunts</p>        				
			</div>
			    
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding-top:10px" align="center">
			    <a href="#" id="partner">OUR PARTNERS</a>
			    <a href="#map2" id="map1">FIND US ON MAP</a>
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="center" style="padding-top:10px">
				<div id="hotel_name"><?php echo $hname ?></div>
			</div>
		</div>
	</div>


                                 <!--Navigation Section-->							 
     <nav class="navbar navbar-inverse">
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
                                    <!-- nav section end-->
									
									<!-- carousel starts -->
	<div class="container-fluid" style="padding-bottom:1px; padding-left:0px; padding-right:0px">								
        <div id="myCarousel" class="carousel fade-carousel slide" data-ride="carousel" data-interval="1500">
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="fill">
                        <img src="h_img/<?php echo $img1 ?>" alt="Chania">
                    </div>
                    <div class="carousel-caption">
                        <h3>One of the best hotel in town.</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="fill">
                        <img src="h_img/<?php echo $img2 ?>" alt="Chania">
                    </div>    
                    <div class="carousel-caption">
                        <h3>One of the best hotel in town.</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="fill">
                        <img src="h_img/<?php echo $img3 ?>" alt="Flower">
                    </div>    
                    <div class="carousel-caption">
                       <h3>One of the best hotel in town.</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>       
									<!-- carousel ends -->

									<!-- content starts-->
    <div class="container-fluid" style="padding-left:0px; padding-right:0px">
        <div class="row">

            <div class="col-md-9 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center"><h3><strong>Description</strong></h3></div>
                    <div class="panel-body">
                        <p>
                            <strong id="loc">Location: </strong><?php echo $loc ?>
                        </p>
                        <p>
                            <strong id="cn">Contact No : </strong>(+91) <?php echo $contact ?>
                        </p>
                        <p>
                            <strong id="hps">Hospitality: </strong><?php echo $hps ?>                            
                        </p>
                        <div class="alert alert-success">
                           <strong id="note">*Notice for BIETians: </strong><?php echo $note ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3" align="center">
			    <hr>
			    <div align="center" id="menu">Download Menu
				    <a href="<?php echo $menu ?>"><span class="glyphicon glyphicon-download-alt"></span></a>
				</div>
			    <hr>
			    <div align="center"><h3>Track this location</h3></div>
                <div id="map2"><?php echo $map ?></div>
		    </div>

        </div>
    </div><hr>

    <div class="container-fluid"  align="center">
	    <div><h3><strong>Special dishes</strong></h3></div><hr>
		<!-- dishes -->
        <div class="row">
            
            <div class="col-xs-12 col-md-3">
                <h4><?php echo $spec1 ?></h4>
			</div>
            <div class="col-xs-12 col-md-3">
                <h4><?php echo $spec1 ?></h4>
			</div>
            <div class="col-xs-12 col-md-3">
                <h4><?php echo $spec1 ?></h4>
			</div>
            <div class="col-xs-12 col-md-3">
                <h4><?php echo $spec1 ?></h4>
			</div>			
               
        </div>
	</div><hr>	

    <div class="container-fluid"  align="center">
	    <div><h3><strong>Special Offer</strong></h3></div><hr>
		<!-- dishes -->
		<div class="row">         
            <div class="col-xs-12 col-md-12">
                <h4><?php echo $offer ?></h4>
			</div>
        </div>
	</div><hr>
	
	<?php
	
		
		}
		else
		{
			?>
		<h1 align = "center">Fuck off you jerk!!!
		
		
		<?php
}
}
	?>	
									<!-- content ends-->							
	
	<!-- footer -->
	<div class="container-fluid" id="footer">
	
	    <!--row1-->
	    <div class="row">
		
		    <div class="col-xs-6 col-md-2">
				<div style="color:teal"><h4>Exam Time</h4></div>
        <div><a href="../et/notes.php" style="color:whitesmoke"><h5>Notes</h5></a></div>
        <div><a href="../et/syllabus.php" style="color:whitesmoke"><h5>Syllabus</h5></a></div>
        <div><a href="../et/paper.php" style="color:whitesmoke"><h5>Exam Papers</h5></a></div>
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
					    <img src="h_img/gp.png">
                </a>&nbsp;&nbsp;
				<a href="https://www.facebook.com/odigosguide/?notif_t=page_fan&notif_id=1471878912551769">    
					    <img src="h_img/fb.png">
                    </a>
			</div>
			
			<div class="col-xs-12 col-md-4" align="center" style="color:grey;">
		        <h1 id="contact">Contact Us</h1>
				<b>guideodigos@gmail.com</b><br>
				<b>(+91) 9452056704</b><br>
				<b>(+91) 9458042329</b><br>
				<b>(+91) 9675773252</b>
			</div>
		</div>
		
		<div class="row" align="center" style="margin-top:2px">
		    <div class="col-xs-12 col-md-12">
			    <a href="tnc.html" style="color:gray"><b>Terms & Conditions</b></a>
			</div>
		</div>
	</div>
															
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