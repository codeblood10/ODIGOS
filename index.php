<?php
require "_config.php" ;
$con = connect();
session_start();
$_SESSION["errora"]= 0;
$_SESSION["errorb"]= 0;

$_SESSION["errorc"]= 0;
$_SESSION["errord"]= 0;
?>
<html>
    <head>
        <title>Odigos
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styleindex.css"/>
        <link rel="stylesheet" href="style1.css"/>
        <link rel="stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        
        
        
        
        
        
        <style>
        
        .carousel-caption {
        bottom : 4px;
        }
        </style>
    </head>
<body>  

        <div class="container-fluid" style="background:url('foot0.jpg')">
		    <div class="row">
			    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="padding-left:73px;">
				    <img src="odigos.png">
					<div id="odi">odigos</div>
				</div>
				<div class="col-md-4"></div>
				<div class="w3-hide-small col-md-4 col-sm-6 col-lg-4" align="right" style="padding-right:52px; margin-top:-46px">
				    <img src="bridge2.png">
					<div id="gap">bridging the gaps</div>
				</div>
		    </div>
		</div>








        <nav class="navbar navbar-inverse" style="margin-bottom:0px; padding-left:0px; padding-right:0px">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    
                    <ul class="nav navbar-nav">
                        <li  class="active">
                            <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                        <li>
                            <a href="abt/index.php">About Us</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown">Exam Time <span class="caret" ></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="et/notes.php">Notes</a></li>
                                <li><a href="et/syllabus.php">Syllabus</a></li>
                                <li><a href="et/papers.php">Exam Papers</a></li>
                            </ul>
                        </li>
                        <li><a href="hotels">Hotels</a></li>
                		<li><a href="spin">Spin Around</a></li>
                    <li>
                        <a href="db">Daily Blogs</a>
                    </li>
                    <li>
                        <a href="im">Imex</a>
                    </li>
                    <li>
                        <a href = "bp" >BIET Profiles</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
                    <li>
                        <a data-toggle="modal" data-target="#sugmodal">
                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions
                        </a>
                    </li>
                    <li>
                        <a href= "contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel Content -->
    <div class="container-fluid" style="padding-left:0px; padding-right:0px; padding-bottom:10px">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay">
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    
                    <div class="item slides" id="slide1">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <hgroup>
                            <h1>EXAM TIME</h1>
                            <h2>Lock and load</h2>
                            </hgroup>
                            <a class="btn btn-info btn-lg" data-toggle="modal" href="et/syllabus.php">Syllabus</a>&nbsp;
                            <a class="btn btn-info btn-lg" href="et/papers.php">Papers</a>&nbsp;
                            <a class="btn btn-info btn-lg" href="et/notes.php">Notes</a>
                        </div>
                    </div>
                    
                    <div class="item slides active" id="slide2">
                        <div class="slide-2"></div>
                        <div class="hero">
                            <hgroup>
                            <h1>JUNKET</h1>
                            <h2>Hangout in your city </h2>
                            </hgroup>
                            <a class="btn btn-info btn-lg"  href="jun/hotel.php">Hotels</a>&nbsp;&nbsp;
                            <a class="btn btn-info btn-lg"  href="jun/spin.php">Spin Around</a>
                        </div>
                    </div>
                    
                    <div class="item slides " id="slide3">
                        <div class="slide-3"></div>
                        <div class="hero">
                            <hgroup>
                            <h1>DAILY BLOGS</h1>
                            <h2>What's on your mind</h2>
                            </hgroup>
                            <a class="btn btn-info btn-lg"  href="db.php">Explore</a>
                        </div>
                    </div>
                    
                    <div class="item slides " id="slide4">
                        <div class="slide-4"></div>
                        <div class="hero">
                            <hgroup>
                            <h1>IMEX</h1>
                            <h2>Import and Export your stuff </h2>
                            </hgroup>
                            <a class="btn btn-info btn-lg"  href="im">Explore</a>
                        </div>
                    </div>
                    
                    <div class="item slides " id="slide5">
                        <div class="slide-5"></div>
                        <div class="hero">
                            <hgroup>
                            <h1>BIET Profiles</h1>
                            <h2>Stay Connected</h2>
                            </hgroup>
                            <a class="btn btn-info btn-lg"  href="bp">Explore</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- carousel ends-->
    
    <!--notification -->
    <div class = "container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <!-- Nav tabs -->
                <div class="card">
                    
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#AN" aria-controls="AN" role="tab" data-toggle="tab"><h4>Academic News</h4></a>
                        </li>
                        <li role="presentation">
                            <a href="#LE" aria-controls="LE" role="tab" data-toggle="tab"><h4>Latest Events</h4></a>
                        </li>
                        <li role="presentation">
                            <a href="#TB" aria-controls="TB" role="tab" data-toggle="tab"><h4>Recent Blogs</h4></a>
                        </li>
                        <li role="presentation">
                            <a href="#NA" aria-controls="NA" role="tab" data-toggle="tab"><h4>Newly Added</h4></a>
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="AN">
                            <marquee direction="up"  scrollamount="3">
                            <ul id="notification">
                                <?php
                                $sql_nw = "SELECT * FROM acnws ORDER BY n_id DESC LIMIT 5 ";
                                $sql_res = $con->query($sql_nw); 
                                while ($sql_row = $sql_res->fetch_assoc())
                                {
                                    ?>  
                                <li><a href = "<?php $sql_row["link"] ?>"><?php echo $sql_row["news"] ?></a></li>                      
                                <?php 
                                }
                                ?>
                            </ul>
                            </marquee>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="LE">
                            <marquee direction="up"  scrollamount="3">
                            <ul id="notification">
                                <?php
                                $sql_le = "SELECT * FROM events ORDER BY e_id DESC LIMIT 5 ";
                                $sql_res = $con->query($sql_le); 
                                while ($sql_row = $sql_res->fetch_assoc())
                                {
                                    ?>  
                                <li><?php echo $sql_row["event"] ?></li>                      
                                <?php 
                                }
                                ?>
                            </ul>
                            </marquee>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="TB">
                            <?php
                            $sql="SELECT * FROM daily_blogs WHERE approved = 1 ORDER BY id DESC LIMIT 2 ";
                            $sql_res = $con->query($sql);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $name = $sql_row["name"];
                            $blog = $sql_row["content"];
                            ?>
                            
                            <div class="col-xs-8 col-md-8">
                                <blockquote>
                                    <p><?php echo $blog ?></p>
                                <footer><b><?php echo $name ?></b></footer>
                            </blockquote>
                        </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                    
                    
                    
                    <div role="tabpanel" class="tab-pane" id="NA">
                        <marquee direction="up"  scrollamount="3">
                        <ul style="font-size:18px">
                             <?php
                                $sql_na = "SELECT * FROM newp ORDER BY n_id DESC LIMIT 5 ";
                                $sql_res = $con->query($sql_na); 
                                while ($sql_row = $sql_res->fetch_assoc())
                                {
                                    ?>  
                                <li><a href = "<?php $sql_row["link"] ?>"><?php echo $sql_row["news"] ?></li>                      
                                <?php 
                                }
                                ?>
                        </ul>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        
        <div class ="col-md-4 col-xs-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="h_img/samrat.jpg" alt="samrat">
                        <div class="carousel-caption">
                            <h2 style = "color:whitesmoke;"><b>HOTEL SAMRAT</b></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="h_img/yatrik.jpg" alt="yatrik">
                        <div class="carousel-caption">
                            <h2 style = "color:whitesmoke;"> <b>HOTEL YATRIK </b></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="h_img/sheela.jpg" alt="sheela">
                        <div class="carousel-caption">
                            <h2 style = "color:whitesmoke;"> <b>HOTEL SHEELASHREE</b></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="h_img/shreenath.jpg" alt="shreenath">
                        <div class="carousel-caption">
                            <h2 style = "color:whitesmoke;"> <b>HOTEL SHREENATH</b></h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!--footer md starts-->
<!-- contact us -->
<div  class="w3-container w3-hide-small w3-hide-medium" id="foot">
    <!--row1-->
    <div class="row">
        
        <div class="col-md-2">
            <div style="color:teal"><h4>Exam Time</h4></div>
            <div><a href="et/notes.php" style="color:whitesmoke"><h5>Notes</h5></a></div>
            <div><a href="et/syllabus.php" style="color:whitesmoke"><h5>Syllabus</h5></a></div>
            <div><a href="et/paper.php" style="color:whitesmoke"><h5>Exam Papers</h5></a></div>
            <div><h4><a href="bp"  style="color:teal">BIET Profiles</a></h4></div>
        </div>
        
        <div class="col-md-2">
            
            <div style="color:teal"><h4>Junket</h4></div>
            <div><a href="jun/restrau" style="color:whitesmoke"><h5>Hotels</h5></a></div>
            <div><a href="jun/places" style="color:whitesmoke"><h5>Spin Around</h5></a></div>
            <div><h4><a href="im"  style="color:teal">Imex</a></h4></div>
            <div><h4><a href="db"  style="color:teal">Daily Blogs</a></h4></div>
        </div>
        
        <div class="col-md-4" align="center" style="color:grey">
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
        
        <div class="col-md-4" align="center" style="color:grey;">
            <h1 id="contact">Contact Us</h1>
            <b><span class="glyphicon glyphicon-envelope"></span>&nbsp;guideodigos@gmail.com</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9452056704</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9458042329</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9675773252</b>
        </div>
    </div>
    <div class="row" align="center" style="margin-top:2px">
        <div class="col-md-12">
            <a href="tnc.html" style="color:gray"><b>Terms & Conditions</b></a>
        </div>
    </div>
</div>
<!--footer ends-->
<!--footer sm starts-->
<!-- contact us -->
<div  class="w3-container w3-hide-large" id="footer" style=" background : url('footer.jpg')">
    <!--row1-->
    <div class="row">
        
        <div class="col-xs-6">
            <div style="color:teal"><h4>Exam Time</h4></div>
            <div><a href="et/notes.php" style="color:whitesmoke"><h5>Notes</h5></a></div>
            <div><a href="et/syllabus.php" style="color:whitesmoke"><h5>Syllabus</h5></a></div>
            <div><a href="et/paper.php" style="color:whitesmoke"><h5>Exam Papers</h5></a></div>
            <div><h4><a href="bp"  style="color:teal">BIET Profiles</a></h4></div>
        </div>
        
        <div class="col-xs-6">
            
            <div style="color:teal"><h4>Junket</h4></div>
            <div><a href="jun/restrau" style="color:whitesmoke"><h5>Hotels</h5></a></div>
            <div><a href="jun/places" style="color:whitesmoke"><h5>Spin Around</h5></a></div>
            <div><h4><a href="im"  style="color:teal">Imex</a></h4></div>
            <div><h4><a href="db"  style="color:teal">Daily Blogs</a></h4></div>
        </div>
        
        <div class="col-xs-12" align="center" style="color:grey">
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
        
        <div class="col-xs-12" align="center">
            <h1 id="contact">Contact Us</h1>
            <b><span class="glyphicon glyphicon-envelope"></span>&nbsp;guideodigos@gmail.com</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9452056704</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9458042329</b><br>
            <b> <span class="glyphicon glyphicon-phone"></span>&nbsp;(+91) 9675773252</b>
        </div>
    </div>
    <div class="row" align="center" style="margin-top:2px">
        <div class="col-xs-12">
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
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Your Name
                        </label>
                        <input type="text" class="form-control" name="yname" id="name" placeholder="Enter your name" required="required">
                    </div>
                    <!--suggestion-->
                    <div class="form-group" align="left">
                        <label for="suggest">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp;Suggestion
                        </label>
                        <textarea class="form-control" name="suggestion" rows="6" id="suggest" placeholder="Max length 500 characters" required="required" ></textarea>
                    </div>
                    <!--contact-->
                    <div class="form-group" align="left">
                        <label for="conta">
                            <span class="glyphicon glyphicon-phone"></span>&nbsp;Your Contact
                        </label>
                        <input type="text" class="form-control" name="contact" id="conta" placeholder="Enter your contact/FB profile link/Email" required="required">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="adsug" class="btn btn-success btn-default pull-right">
                        <span class="glyphicon glyphicon-flag"></span>Submit
                        </button>
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span>Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--suggestion modal ends-->

</body>
</html>
<?php
define("someUnguessableVariable", "anotherUnguessableVariable");
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
