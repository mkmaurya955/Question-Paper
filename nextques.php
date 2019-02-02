<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOMATIC QUESTION PAPER GENERATOR</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   
   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
                        <a class="page-scroll" href="insertques.php"><span class="glyphicon glyphicon-question-sign"></span> Add Questions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="form.html"><span class="glyphicon glyphicon-plus"></span> Generate Paper</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    
<?php
    session_start();

	$title=$_SESSION["title"];
	
	$noq=$_SESSION["noq"];


	if($noq>0)
	{
		?>

 <div class="row" style="margin-top: 150px; align: center ">
 <div class="col-lg-8 col-lg-offset-2">
 <h2>Select the parameters:</h2>
		<form action="displayoptions.php" method="post">
<table >
	<tr>
	<td>
		<select name="mod" style="color:grey;">
		<option value="na">Enter the module number</option>
    <option value="one">1</option>
    <option value="two">2</option>
    <option value="three">3</option>
    <option value="four">4</option>
    <option value="five">5</option>
  </select>
  </td>
	</tr><br>
	<tr>
	<td>
	<select name="sub" style="color:grey;">
	<option value="na">Enter the subject</option>
    <option value="ait">AIT</option>
    <option value="dmbi">DMBI</option>
    <option value="se">SE</option>
    <option value="sws">SWS</option>
    <option value="ds">DS</option>
  </select>	
  </td>
	</tr><br>
	<tr>
	<td>
	<select name="marks" style="color:grey;">
	<option value="na">Enter the marks</option>
    <option value="10">10</option>
    <option value="8">8</option>
    <option value="5">5</option>
    <option value="2">2</option>
  </select>	
  </td>	
	</tr><br>
	<tr>
	<td>
		<select name="comp" style="color:grey;">
		<option value="na">Enter the complexity</option>
    <option value="easy">Easy</option>
    <option value="mod">Moderate</option>
    <option value="diff">Difficult</option>
    
  </select>	
  </td><br>
	</tr>
</table>
<br><br>
<input type="submit" value="Submit" style="color:black;">	
</form>
</div>
</div>

<?php
$_SESSION["noq"]=$_SESSION["noq"]-1;
	}
	else
	{
		?>
		<div class="container">
            <table border="1" width="100%" height="100%" align="center" style="margin-top: 100px">
               <tr><td style="text-align: center; background-color: lightblue"> <h2>Question Paper</h2> </td></tr>

<?php
		include 'registerdb.php';
		$qu="select * from $title";

$fetch=$conn->query($qu);
//echo "$fn";
if(is_object($fetch)){
if ($fetch->num_rows > 0)
{
	$id=1;
	while($row=$fetch->fetch_assoc())
	{
	
		$ques=$row['question'];
		$marks=$row['marks'];
		?>

				<tr>
					<td><?php echo "$id"?></td>
                
					<td><?php echo "$ques"?></td>
               
					<td><?php echo "$marks"?></td>
                
				</tr>
		

		<?php
		$id++;
	}

}
}
}
?>
</table>
</div>
</div>
</div>
</body>
</html>