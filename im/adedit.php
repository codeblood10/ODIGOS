<?php
session_start();
require "_config.php";
$con = connect();
if (isset($_POST['updform'])) {
$adtitle= $_POST['adt'];
$adname= $_POST['adname'];
$price= $_POST['price'];
$cat= $_POST['cat'];
$des= $_POST['desc'];
$contact= $_POST['con'];
$fb_link = $_POST['fb'];
$id = $_POST['id'];
$token = $_POST['token'];
if ($_FILES['image']['size'] == 0) {
$sql_upd ="UPDATE adtable SET ad_title = '{$adtitle}', name='{$adname}', price = {$price}, category={$cat}, description='{$des}', contact = {$contact} , fb = '{$fb_link}' WHERE ad_id = {$id} AND ad_token='{$token}'";
$con->query($sql_upd);
} else {
/*upload code starts*/
$extension=array("jpg","png","jpeg");
$success;
$file_name=$_FILES["image"]["name"];
$file_tmp=$_FILES["image"]["tmp_name"];
if ($_FILES["image"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
$ext=pathinfo($file_name,PATHINFO_EXTENSION);
$only_name = uniqid();
$db_name = $only_name.'.jpg';
$new_name = $only_name.'.'.$ext;
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


$sql_upd ="UPDATE adtable SET ad_title = '{$adtitle}', name='{$adname}', price = {$price}, category={$cat}, description='{$des}', contact = {$contact} , fb = '{$fb_link}' , pics='{$new_name}' WHERE ad_id = {$id} AND ad_token='{$token}'";
$con->query($sql_upd);
}
header("location: addes.php?id={$id}");

}
?>
<?php
if (isset($_GET['tsubmit'])) {
$id = $_GET['id'];
        $token = $_GET['token'];
        $sql_chk = "SELECT * FROM adtable WHERE ad_id = {$id} AND ad_token = '{$token}'";
        $res_chk = $con->query($sql_chk);
        if ($res_chk->num_rows > 0) {
            $sql_row = $res_chk->fetch_assoc();
                $adtitle= $sql_row["ad_title"];
$adname= $sql_row["name"];
$price= $sql_row["price"];
$cat = $sql_row["category"];
$des = $sql_row["description"];
$contact = $sql_row["contact"];
$photo=$sql_row["pics"];
$fb_link = $sql_row["fb"];
?>
<html>
    <head>
        <title>Edit Your Ad
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
<!--nav section ends-->
<div class="container">
<div class="jumbotron" align="center">
<h1><span class="glyphicon glyphicon-envelope"></span>&nbsp;Edit your Ad!!</h1>

</div>


<!--edit modal-->
<form role="form" method="post" action="adedit.php" enctype="multipart/form-data">
<!--ad title-->
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="token" value="<?php echo $token; ?>">
<div class="form-group" align="left">
<label for="username">
    <!--<span class="glyphicon glyphicon-user"></span>-->
    Ad title
</label>
<input type="text" value="<?php echo $adtitle; ?>" class="form-control" name="adt" id="usrname" placeholder="Enter the title for your ad" required="required">
</div>
<!--ad category-->
<div class="form-group" align="left">
<label for="Category">
    <!--<span class="glyphicon glyphicon-user"></span>-->
    Category
</label>
<select name="cat" class="form-control">
    <option value="1" <?php if($cat == 1) {echo 'selected';} ?>>Books</option>
    <option value="2" <?php if($cat == 2) {echo 'selected';} ?>>Photostates</option>
    <option value="3" <?php if($cat == 3) {echo 'selected';} ?>>Games</option>
    <option value="4" <?php if($cat == 4) {echo 'selected';} ?>>Electronics</option>
</select>
</div>


<!--ad description-->
<div class="form-group" align="left">
<label for="comment"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Description
</label>
<textarea class="form-control" name="desc" rows="4" id="comment" placeholder="Max length 400 characters" required="required"><?php echo $des; ?></textarea>
</div>
<!--ad price-->
<div class="form-group" align="left">
<label for="price"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Price
</label>
<input type="text" name="price" class="form-control" id="price" placeholder="Enter the price here" value="<?php echo $price; ?>" required="required">
</div>
<!--photo upload-->
<div class="form-group" align="left">
<label for="photo"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Photo
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="file" name="image" id="fileToUpload">


</div>

<!--name-->
<div class="form-group" align="left">
<label for="name"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Name
</label>
<input type="text" value="<?php echo $adname; ?>" name="adname" class="form-control" id="name" placeholder="Enter your name here" required="required">
</div>
<!--contact-->
<div class="form-group" align="left">
<label for="conta"><!--<span class="glyphicon glyphicon-comment"></span>-->
&nbsp;Contact
</label>
<input type="text" value="<?php echo $contact; ?>" name="con"class="form-control" id="conta" placeholder="Enter your contact here" required="required">
</div>
<!--fb profile link-->
<div class="form-group" align="left">
    <label for="fb"><!--<span class="glyphicon glyphicon-comment"></span>-->
    &nbsp;Fb profile link
</label>
<input type="text"  value = "<?php echo $fb_link ?>" name="fb" class="form-control" id="fb" placeholder="https://www.facebook.com/anuraj.singh.10" required="required">
</div>






<button type="submit" name="updform" class="btn btn-success btn-default pull-right">
<span class="glyphicon glyphicon-flag"></span>
Submit
</button>
<a href="addes.php?id=<?php echo $id; ?>"  class="btn btn-danger btn-default pull-left">
 
<span class="glyphicon glyphicon-remove"></span>
Cancel

</a>
</form>
</div>

<br>
<br>
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


</body>
</html>
<?php
}


else
{
    $_SESSION["error"]=1;
	header("location:addes.php?id={$id}");
    
}
}

?>
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
