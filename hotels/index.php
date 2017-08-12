<?php
require "_config.php";
$con = connect();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="hotel.css"/>
		<link rel = "stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
         <style>
        #web{
            font-size : 25px;
        }
       </style>
		
		
		
		
		
		
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
<!-- nav section end-->
    <div class="container-fluid" id="welcome" style="margin-bottom:0px; padding-left:0px; padding-right:0px; margin-top:50px">
	    <div class="row">
		    <div class="col-md-3">
			    <img src="h_img/food1.jpg" height="100px" width="200px">
			</div>
		    <div class="col-md-6">
			    <h2><b font="red">Best Hotels and Restaurants nearby BIET Jhansi</b></h2>
			</div>
			<div class="col-md-3" id="search">
			    <form class="form-inline" method = "POST" action = "searchindex.php" role="form">
				        <div class="form-group">
				            <input type="text" class="form-control" name="seah" placeholder=" search hotel..">
					    </div>						
						<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
	    </div>
    </div>  
                                           <!-- Welcome part ends -->	
								
    <div class="container-fluid">
	    <div class="row" id="intro">
		  <div class="col-md-12">
		    <h3 id="text">We provide you the information about the best hotels in Jhansi for your treats and parties</h3>
		  </div> 
		</div>  
	</div> 
	                                        <!-- Food quotations ends -->
											
	 <div class="container-fluid" style="padding-left:0px; padding-right:0px">
	    <div class="row">
		    <div class="col-md-12">
	            <div class="panel panel-primary">
                    <div class="panel-heading"><h2 id="heading">Hotels and Restaurants</h2></div>
                </div>
	        </div>
	    </div>
	</div>
    
	
	<?php
	$sql_recent = "SELECT * FROM hotels";
	$query = $con->query($sql_recent);
	$num_rows = mysqli_num_rows($query);
	$per_page = 5;   // Per Page
    $page  = 1;
    
    if(isset($_GET["Page"]))
    {
        $page = $_GET["Page"];
    }

    $prev_page = $page-1;
    $next_page = $page+1;

    $row_start = (($per_page*$page)-$per_page);
    if($num_rows<=$per_page) 
    {
        $num_pages =1;
    }
    else if(($num_rows % $per_page)==0)
    {
        $num_pages =($num_rows/$per_page) ;
    }
    else
    {
        $num_pages =($num_rows/$per_page)+1;
        $num_pages = (int)$num_pages;
    }
    $row_end = $per_page * $page;
    if($row_end > $num_rows)
    {
        $row_end = $num_rows;
    }
        $sql = "SELECT * FROM hotels ORDER BY od_id DESC LIMIT $per_page OFFSET $row_start ";
		$sql_res=$con->query($sql);
		if($sql_res->num_rows>0){
		while($sql_row = $sql_res->fetch_assoc())
        {
        $id = $sql_row["hotel_id"];
        $hname = $sql_row["name"];
        $loc = $sql_row["address"];
        $img1 = $sql_row["pic1"];
        $img2 = $sql_row["pic2"];
        $contact = $sql_row["contact"];
		
    ?>  
	
    <div id="content" class="container" style="padding-top:10px">
	    <div class="row">
		    
			<div class="col-md-4 fill" id="image1">
			    <img src="h_img/<?php echo $img1 ?>" class="img-rounded" alt="<?php echo $hname ?>" style="margin-bottom:0px">
		    </div>
			<div class="col-md-4 fill" id="image2">
				<img src="h_img/<?php echo $img2 ?>" class="img-rounded" alt="<?php echo $hname ?>" style="margin-bottom:0px">
			</div>	
			
			<div class="col-md-4">
			    <div class="panel panel-default">
                    <div class="panel-heading" id="head"><h3 id="heading"><?php echo $hname ?></h3></div>
					<div class="panel-body">
					        <b>Location:</b><?php echo $loc ?><br>
				            <b>Contact No.</b>(+91) <?php echo $contact ?>
					</div>
					<div id="description"><a href="h_description.php?id=<?php echo $id ?>"class="btn btn-success" role="button">See Full Description</a></div>									
                </div>				
			</div>
	    </div>
	</div>	
		<hr>
		<?php 
	}
}
?>
		 
   
    <!-- pagination -->
	
	<div align="center">
        <ul class="pager" >

    <?php
    if($prev_page) {
       echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'>Back</a></li> ";
    }

    for($i=1; $i<=$num_pages; $i++){
        if($i != $page) {
            /*echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> </li>";*/
        }
        else {
            /*echo "<li> $i </li>";*/
        }
    }
    ?>

    <?php
    if($page!=$num_pages) {
        echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'>Next</a></li> ";
    }


    ?>
        </ul>
    </div>
    <br><br><br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	



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
