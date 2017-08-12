<?php
 require "_config.php" ;
 $con = connect();


 session_start();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam Papers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel = "stylesheet" href="footer.css"/>
</head>
<style>  

	      
        .modal-content{background-image:url("pmodal.jpg");}
   .wrapper {
    text-align: center;
	padding-top:15%; 
	                           
	       }
 body
 {  
   background:url("paper.JPG") no-repeat;  
   
 }   
   
   #web{
            font-size : 25px;
        }   

        #navi
        {
            font-family: Verdana,sans-serif;
            font-size: 15px;
            line-height: 1.5;
        }

 </style>
<body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid" id="navi">
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
   
 <!-- Trigger the modal with a button -->
  <div class="wrapper">
    <h1 Style="font-size:100px;color:white;font-weight:bold;text-shadow: 8px 2px 2px black, 0 0 25px blue, 0 0 5px darkblue;◙">EXAM TIME</h1>
	<h4 style="font-size:50px;color:white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">PAPER</h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">EXPLORE</button>
   </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center">DETAILS PLEASE</h3>
        </div>
		 <form action="getpaper.php" METHOD ="POST"  data-async data-target="#myModal" class="form-horizontal text-center">
        <div class="modal-body">
           
                 <div class="form-group">
                          <div class="col-md-12 center-block text-center">
                          <label class="control-label">ENTER YOUR YEAR:</label>
                            <input class="form-control text-center" type="text" placeholder="I,II,III,IV," value="" name="year" required="required" />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12 center-block text-center">
                          <label class="control-label">PAPER CODE:</label>
                            <input class="form-control text-center"  type="text" placeholder="Type in exact manner as given in your paper(ecs101)" value="" name="paper" required="required"/>
                          </div>
                      </div>
                
        </div>
        <div class="modal-footer">
		 <!--<input class="btn btn-md btn-success pull-left"  type="submit" id="submitForm" value="submit"/>  -->		 
	<button  id="submitForm" class="btn btn-md btn-success pull-right">Submit</button>
          <button type="button" class="btn btn-md btn-danger pull-left" data-dismiss="modal">Close</button>
          
		</div>
		 </form>
      </div>
     
    </div>
  </div> 
  <br><br><br>
   <script>
   jQuery(function($) {
    $('form[data-async]').live('submit', function(event) {
        var $form = $(this);
        var $target = $($form.attr('data-target'));

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),

            success: function(data, status) {
                $target.html(data);
            }
        });

        event.preventDefault();
    });
});
</script>
<!--footer starts-->
<!-- contact us -->
<div id="navi">
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
        
        
        <div ><a href= "../hotels" style="color:teal"><h4>Hotels</h4></a></div>
        <div ><h4><a href = "../spin" style="color:teal">Spin Around</a></h4></div>
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
</div>

<!--footer ends-->
    <?php 

    if($_SESSION["errord"]) 
   {echo '<script type="text/javascript">',
     'alert("worng details")',
     '</script>'
    ; 
       $_SESSION["errord"] = 0;
     } 
    ?>

</body>
</html> 
<!--suggestion modal starts-->
<div class="modal fade modal-md" id="sugmodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <!--modal header-->
            <div class="modal-header" style="padding:25px 25px;" align = "center">
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
 
 

  
   
   
   
   
    