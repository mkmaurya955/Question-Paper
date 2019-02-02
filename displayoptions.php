<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOMATIC QUESTION PAPER GENERATOR</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color: silver"> 

    <!-- Navigation -->
        <nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;" role="navigation">
        <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Automatic Paper Generator</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#register"><span class="glyphicon glyphicon-question-sign"></span> Add Questions</a>
                    </li>
                    <li>   
                        <a class="page-scroll" href="form.html"><span class="glyphicon glyphicon-plus"></span> Generate Paper</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>


 <div class="row" style="margin-top: 50px; align: center; ">
 <div class="col-lg-8 col-lg-offset-2">
 <h2>Select the appropriate question:</h2>
<form name='myform' action='questionppr.php'  method='post'>
<?php
include 'registerdb.php';

$rmod=$rsub=$rcomp=$rmarks="";
if(isset($_POST['submit'])){

$rmod=$_POST["mod"];
$rsub=$_POST["sub"];
$rcomp=$_POST["comp"];
$rmarks=$_POST["marks"];
}

$id=0;
$qu="select * from questions";

$fetch=$conn->query($qu);
//echo "$fn";
if ($fetch->num_rows > 0)
{
	while($row=$fetch->fetch_assoc())
	{
		$id=$row['id'];
		$ques=$row['ques'];
		$mod=$row['module'];
		$sub=$row['sub'];
		$comp=$row['comp'];
		$marks=$row['marks'];

		if($rmod==$mod && $rsub==$sub && $rcomp==$comp && $rmarks==$marks)
		{
			?>

	
	<input type="radio" name="question" value="<?php echo $id; ?>"><?php echo "$ques<br>"?>
<?php
		}
}

}
?>

<input type="submit" id="btn" value="Submit" style="color:black; margin-top: 10px;">
</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>


<hr>
</body>
</html>
<?php
//include 'nextques.php';
?>
