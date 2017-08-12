<?php
require "_config.php";
$con = connect();

?>



<html>
<head>
	<title>Suggestions Display</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<br><br><br><br>
	<div class="container-fluid">
	<div class="row">
	<?php
	$sql_rec = "SELECT * FROM suggest";
	$query = $con->query($sql_rec);
	$num_rows = mysqli_num_rows($query);
	$per_page = 20;   // Per Page
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



	$sql = "SELECT * FROM suggest ORDER BY sug_id DESC LIMIT $per_page OFFSET $row_start";
	$sql_res = $con->query($sql);
	if ($sql_res->num_rows > 0) {
	while ($sql_row = $sql_res->fetch_assoc()) {
             $name = $sql_row["sug_name"];
             $desc = $sql_row["sug_desc"];
             $cont = $sql_row["contact"];

	?>


	<div class="col-md-6">
	<blockquote>
		<p><?php echo $desc ?>
		</p>
		<footer><?php echo $name ?><br>
		<?php echo $cont ?>
		</footer>
	</blockquote>
	</div>
	

	<?php
		}
	}

	else{
	echo "No suggestions till now";
	}
	?>
	</div>
	</div>
	<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center">
            <ul class="pagination pagination-lg">
 <?php

 if($prev_page)
{
    echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'><b > Back</b></a></li> ";
}

for($i=1; $i<=$num_pages; $i++){
    if($i != $page)
    {/*
        echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> </li>";
    }
    else
    {
        echo "<li> $i </li>";*/
    }
}
if($page!=$num_pages)
{
    echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'><b>Next</b></a></li> ";
}
?>
            </ul>
          </div>
        </div>
    </div>



</body>
</html>