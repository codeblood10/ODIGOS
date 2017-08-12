<?php
require '_config.php';
$con = connect();
session_start();

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
<html>
    <head>
        <title>Search Skills
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="styleindex.css"/>
        <link rel="stylesheet" herf="style1.css"/>
        <link rel = "stylesheet" href="footer.css"/>
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
<!-- nav section end-->
<br><br><br>
<h1 align="center">Search Results!!</h1>
<br><br>
<?php
$sql_recent = "SELECT * FROM profile WHERE LOWER(skill) LIKE LOWER('%".$sdsearch."%') AND approved  = 1 ";
$query = $con->query($sql_recent);
$num_rows = mysqli_num_rows($query);
$per_page = 16;   // Per Page
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
$sql = "SELECT * FROM profile WHERE LOWER(skill) LIKE LOWER('%".$sdsearch."%') ORDER BY roll_no DESC LIMIT $per_page OFFSET $row_start ";
    $sql_res=$con->query($sql);
    if($sql_res->num_rows>0){
while($sql_row = $sql_res->fetch_assoc())
{
    $id = $sql_row["roll_no"];
    $p_pic = $sql_row["pic"];
    $p_name = $sql_row["name"];
    $p_fb = $sql_row["fb"];
    ?>


<div class="row">
<div class="container">
<a href ="viewprofile.php?id=<?php echo $id ?>">
<div class="col-md-3 col-sm-6">
    <center>
  <img src="uploads/<?php echo $p_pic?>" class="img-circle " height="160" width="160">
                      <p>
                      <b ><?php echo $p_name ?> </b><br>
                        Follow on <a href="<?php echo $p_fb?>" target="_blank" class="hPrepathonFacebook">
                          <i class="fa fa-facebook fa-2x"></i></a>



                       </p>
                      </center>
                      


</div>
</a>
<?php


}
?>
</div>
</div>
<!--pagination starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center">
<div align="center">
<ul class="pagination pagination-lg" >

<?php
if($prev_page)
{
    echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&ssearch=$sdsearch'><b > Back</b></a></li> ";
}

for($i=1; $i<=$num_pages; $i++){
    if($i != $page)
    {
        /*echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i&ssearch=$sdsearch'>$i</a> </li>";*/
    }
    else
    {
        /*echo "<li> $i </li>";*/
    }
}
?>

<?php
if($page!=$num_pages)
{
    echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&ssearch=$sdsearch'><b>Next</b></a></li> ";
}

}
else
echo '<h2 align="center">Sorry no results found!</h2>';

?>
</ul>
</div>
</div>
</div>
</div>
<br><br><br>
<!--footer md starts-->
<!-- contact us -->
<div  class="w3-container w3-hide-small w3-hide-medium" id="foot">

<!--row1-->
<div class="row">
    
    <div class="col-md-2">
        <div style="color:teal"><h4>Exam Time</h4></div>
        <div><a href="../et/notes.php" style="color:whitesmoke"><h5>Notes</h5></a></div>
        <div><a href="../et/syllabus.php" style="color:whitesmoke"><h5>Syllabus</h5></a></div>
        <div><a href="../et/paper.php" style="color:whitesmoke"><h5>Exam Papers</h5></a></div>
        <div><h4><a href="../bp"  style="color:teal">BIET Profiles</a></h4></div>
    </div>
    
    <div class="col-md-2">
        
        <div style="color:teal"><a href= "../hotels"><h4>Hotels</h4></a></div>
        <div style="color:teal"><h4><a href = "../spin">Spin Around</a></h4></div>
        <div><h4><a href="../im"  style="color:teal">Imex</a></h4></div>
        <div><h4><a href="../db"  style="color:teal">Daily Blogs</a></h4></div>
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
        <div><a href="../et/notes.php" style="color:whitesmoke"><h5>Notes</h5></a></div>
        <div><a href="../et/syllabus.php" style="color:whitesmoke"><h5>Syllabus</h5></a></div>
        <div><a href="../et/paper.php" style="color:whitesmoke"><h5>Exam Papers</h5></a></div>
        <div><h4><a href="../bp"  style="color:teal">BIET Profiles</a></h4></div>
    </div>
    
    <div class="col-xs-6">
        
        <div style="color:teal"><a href= "../hotels"><h4>Hotels</h4></a></div>
        <div style="color:teal"><h4><a href = "../spin">Spin Around</a></h4></div>
        <div><h4><a href="../im"  style="color:teal">Imex</a></h4></div>
        <div><h4><a href="../db"  style="color:teal">Daily Blogs</a></h4></div>
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



</body>
</html>