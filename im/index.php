<?php
require '_config.php';
$con = connect();
session_start();
$_SESSION["error"] =0;
ini_set('display_errors', 1);
error_reporting(~0);
$adsearch = null;
if(isset($_POST["insearch"]))
{
$adsearch = $_POST["insearch"];
}
if(isset($_GET["insearch"]))
{
$adsearch = $_GET["insearch"];
}
if($_SESSION["error"])
{echo '<script type="text/javascript">',
'alert("Worng Details")',
'</script>'
;
$_SESSION["error"] = 0;
}
?>
<html>
    <head>
        <title>Imex-Import/Export
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="styleindex.css"/>
        <link rel="stylesheet" href="style1.css"/>
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
<!-- Carousel Content -->
<div class="container-fluid" style="padding-bottom:10px; padding-left:0px; padding-right:0px;">
<!-- First Featurette -->

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay">
            
            <!-- Wrapper for slides -->
            
            <div class="carousel-inner">
                
                <div class="item slides active " id="slide1">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>IMEX</h1>
                        <h2>BUY/SELL</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides " id="slide2">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>IMEX</h1>
                        <h2>BUY/SELL</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides" id="slide3">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>IMEX</h1>
                        <h2>BUY/SELL</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides " id="slide4">
                    <div class="slide-4"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>IMEX</h1>
                        <h2>BUY/SELL</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
<!-- Ads  Area-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#AN" aria-controls="AN" role="tab" data-toggle="tab"><h4>Recently Added</h4></a></li>
                    <li role="presentation"><a href="#LE" aria-controls="LE" role="tab" data-toggle="tab"><h4>Books</h4></a></li>
                    <li role="presentation"><a href="#TB" aria-controls="TB" role="tab" data-toggle="tab"><h4>Photostates</h4></a></li>
                    <li role="presentation"><a href="#GS" aria-controls="GS" role="tab" data-toggle="tab"><h4>Games</h4></a></li>
                    <li role="presentation"><a href="#NA" aria-controls="NA" role="tab" data-toggle="tab"><h4>Electronics</h4></a></li>
                    <form class="navbar-form navbar-right" action="searchindex.php"s role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Ads" name="insearch" />
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </ul>
                <br>
                <!-- Tab panes-->
                <div class="tab-content">
                    <!--recently added-->
                    <div role="tabpanel" class="tab-pane active" id="AN">
                        
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $id = $sql_row["ad_id"];
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            ?>
                            <a href="addes.php?id=<?php echo $id; ?>">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="fill" style="height:300px; width:100%;">
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?> "height="300px" width="308px" class="w3-hover-opacity img-responsive">
                                        </div>
                                        <div class="caption" id="capt">
                                            <h3><b>Item: &nbsp;</b>
                                            <?php echo $adtitle?>
                                            </h3>
                                            <h3><b>Price: &nbsp;</b>
                                            <?php echo $price?>
                                            </h3>
                                            <h3><b>By: &nbsp;</b>
                                            <?php echo $adname?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                        <!--
                        view more Button
                        -->
                        <a href="catdis.php"  name="adform"  class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    
                    <!-- books panel-->
                    <div role="tabpanel" class="tab-pane" id="LE">
                        <!--tab advertisements-->
                        
                        
                        <div class="row">
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 1 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            $adid= $sql_row["ad_id"];
                            ?>
                            
                            <a href="addes.php?= <?php echo $adid?>">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="fill" style="height:300px; width:100%;">
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?>">
                                        </div>
                                        <div class="caption" id="capt">
                                            <h3><b>Item: &nbsp;</b>
                                            <?php echo $adtitle?>
                                            </h3>
                                            <h3><b>Price: &nbsp;</b>
                                            <?php echo $price?>
                                            </h3>
                                            <h3><b>By: &nbsp;</b>
                                            <?php echo $adname?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            }
                            ?>
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=1"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                    </div>
                    
                    
                    
                    
                    <!--photostates-->
                    <div role="tabpanel" class="tab-pane" id="TB">
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 2 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            ?>
                            <a href="addes.php?id=<?php echo $id; ?>">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="fill" style="height:300px; width:100%;">
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?>">
                                        </div>
                                        <div class="caption" id="capt">
                                            <h3><b>Item: &nbsp;</b>
                                            <?php echo $adtitle?>
                                            </h3>
                                            <h3><b>Price: &nbsp;</b>
                                            <?php echo $price?>
                                            </h3>
                                            <h3><b>By: &nbsp;</b>
                                            <?php echo $adname?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            }
                            ?>
                            
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=2"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    <!--games-->
                    <div role="tabpanel" class="tab-pane" id="GS">
                        <!--tab advertisements-->
                        <div class="row" >
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 3 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            ?>
                            <a href="addes.php?id=<?php echo $id; ?>">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="fill" style="height:300px; width:100%;">
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?>">
                                        </div>
                                        <div class="caption" id="capt">
                                            <h3><b>Item: &nbsp;</b>
                                            <?php echo $adtitle?>
                                            </h3>
                                            <h3><b>Price: &nbsp;</b>
                                            <?php echo $price?>
                                            </h3>
                                            <h3><b>By: &nbsp;</b>
                                            <?php echo $adname?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                        <!--
                        view more Button
                        -->
                        
                        <a href="catdis.php?cat=3"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    
                    
                    <!--electronics-->
                    <div role="tabpanel" class="tab-pane" id="NA">
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 4 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            ?>
                            <a href="addes.php?id=<?php echo $id; ?>">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="fill" style="height:300px; width:100%;">
                                            
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?>">
                                        </div>
                                        <div class="caption" id="capt">
                                            <h3><b>Item: &nbsp;</b>
                                            <?php echo $adtitle?>
                                            </h3>
                                            <h3><b>Price: &nbsp;</b>
                                            <?php echo $price?>
                                            </h3>
                                            <h3><b>By: &nbsp;</b>
                                            <?php echo $adname?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            }
                            ?>
                            
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=4"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
	</div>
<br><br>
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


<!--imex modal-->
<div class="modal fade modal-md" id="imexmodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:25px 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-envelope"></span>&nbsp;Post your Ad!!</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                
                
                <form role="form" method="post" action="adpost.php" enctype="multipart/form-data">
                    <!--ad title-->
                    <div class="form-group" align="left">
                        <label for="username">
                            <!--<span class="glyphicon glyphicon-user"></span>-->
                            Ad title
                        </label>
                        <input type="text" class="form-control" name="adt" id="usrname" placeholder="Enter the title for your ad" required="required">
                    </div>
                    <!--ad category-->
                    <div class="form-group" align="left">
                        <label for="Category">
                            <!--<span class="glyphicon glyphicon-user"></span>-->
                            Category
                        </label>
                        <select name="cat" class="form-control">
                            <option value="1">Books</option>
                            <option value="2">Photostates</option>
                            <option value="3">Games</option>
                            <option value="4">Electronics</option>
                        </select>
                    </div>
                    
                    
                    <!--ad description-->
                    <div class="form-group" align="left">
                        <label for="comment"><!--<span class="glyphicon glyphicon-comment"></span>-->
                        &nbsp;Description
                    </label>
                    <textarea class="form-control" name="desc" rows="4" id="comment" placeholder="Max length 400 characters" required="required" ></textarea>
                </div>
                <!--ad price-->
                <div class="form-group" align="left">
                    <label for="price"><!--<span class="glyphicon glyphicon-comment"></span>-->
                    &nbsp;Price
                </label>
                <input type="text" name="cost" class="form-control" id="price" placeholder="Enter the price here" required="required">
            </div>
            <!--photo upload-->
            <div class="form-group" align="left">
                <label for="photo"><!--<span class="glyphicon glyphicon-comment"></span>-->
                &nbsp;Photo
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" name="image" id="photo" value="pic" required="required">
        </div>
        <!--name-->
        <div class="form-group" align="left">
            <label for="name"><!--<span class="glyphicon glyphicon-comment"></span>-->
            &nbsp;Name
        </label>
        <input type="text" name="adname" class="form-control" id="name" placeholder="Enter your name here" required="required">
    </div>
    <!--contact-->
    <div class="form-group" align="left">
        <label for="conta"><!--<span class="glyphicon glyphicon-comment"></span>-->
        &nbsp;Contact
    </label>
    <input type="text" name="con"class="form-control" id="conta" placeholder="Contact Number" required="required">
</div>
<!--fb profile link-->
<div class="form-group" align="left">
    <label for="fb"><!--<span class="glyphicon glyphicon-comment"></span>-->
    &nbsp;Fb profile link
</label>
<input type="text" name="fb" class="form-control" id="fb" placeholder="https://www.facebook.com/anuraj.singh.10" required="required">
</div>
</div>
<div class="modal-footer">
<button type="submit" name="adform" class="btn btn-success btn-default pull-right">
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
<!--imex modal ends-->
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