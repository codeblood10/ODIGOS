<?php
require "_config.php";

$con = connect();
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Spin Around</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="spin_around.css"/>
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <style>
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
		
    <!-- carausel -->
	<div class="container-fluid" style="padding-bottom:1px; padding-right:0px; padding-left: 0px;">								
        <div id="myCarousel" class="carousel fade-carousel slide" data-ride="carousel" data-interval="1500">
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="fill">
                        <img src="sp_img/sp1.jpg" alt="Chania">
                    </div>                  
                </div>

                <div class="item">
                    <div class="fill">
                        <img src="sp_img/sp2.jpg" alt="Chania">
                    </div>    
                </div>

                <div class="item">
                    <div class="fill">
                        <img src="sp_img/sp3.jpg" alt="Flower">
                    </div>    
                </div>
				 <div class="item">
                    <div class="fill">
                        <img src="sp_img/sp4.jpg" alt="Flower">
                    </div>    
                </div>
            </div>
        </div> 
    </div>       
									<!-- carousel ends -->
	
	<!-- content1 -->
	<div class="container-fluid" align="center" id="show">
	    <h1>Places nearby jhansi to visit</h1>
	</div>
	
	<?php
        $query1 = "SELECT * FROM spin ORDER BY place_id DESC";
        $query_res = $con->query($query1);
        if($query_res->num_rows >0){
	    while($sql_row = $query_res->fetch_assoc())
	    {
		    $id = $sql_row["place_id"];
		    $pname = $sql_row["place"];
		    $loc = $sql_row["loc"];
		    $img = $sql_row["img"];
		    $desc = $sql_row["description"];
			$map = $sql_row["map"];
		
    ?>
		
	<hr>
	<div class="container-fluid" style="padding-bottom:1px; padding-right:0px; padding-left:0px; margin-bottom:2px">
	    <div class="row">
		
		    <div class="col-xs-12 col-md-3">
			    <img src="sp_img/<?php echo $img ?>" class="img-thumbnail img-responsive" alt="Cinque Terre">
		    </div>
			
			<div class="col-xs-12 col-md-6">
			    <div style="padding-left:2px; padding-right:2px">
                    <div id="head" align="center"><h3><b><?php echo $pname ?></b></h3></div>
					<div id="desc">
					    <b id="loc">Location: </b><?php echo $loc ?><br>
					    <b id="loc">Description: </b><?php echo $desc ?>					    
                    </div>						
			    </div>
		    </div>
			<div class="col-xs-12 col-md-3">
			    <div align="center"><h4>Track this location</h4></div>
                <div>
                    <?php echo $map ?>
                </div>
		    </div>
		</div>	
	</div>
	<hr>
	
	<?php
	    }
		}
	?>


    <!--pagination-->
    <ul class="pager">
        <li><a href="#"><b>Previous</b></a></li>
        <li><a href="#"><b>Next</b></a></li>
    </ul>

	
	
	
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
					    <img src="sp_img/gp.png">
                </a>&nbsp;&nbsp;
				<a href="https://www.facebook.com/odigosguide/?notif_t=page_fan&notif_id=1471878912551769">    
					    <img src="sp_img/fb.png">
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





















</body>
</html>	