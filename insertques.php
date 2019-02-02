<!DOCTYPE html>
<html>
<head>
    <title>AUTOMATIC QUESTION PAPER GENERATOR</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<title>Questions</title>
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
                    <li class="active"><a href="aftlogin.php"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a class="page-scroll" href="form.html"><span class="glyphicon glyphicon-plus"></span> Generate Paper</a>
                    </li>
                    <li>
                    <a class="page-scroll" href="index.html"><span class=" glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="container" style="margin-top: 120px">
        <table border="1" align="center" width="500" style="background-color: lightblue">
            <tr>
                <td colspan="2" style="padding: 10px; text-align: center;"><h2>Insert the Question</h2></td>
            </tr>
            <form method="post" action="insert.php">
	           <tr>
                    <td style="padding: 10px">Question:</td>
                    <td style="padding: 10px"><input type="text" name="ques" id="ques" placeholder="Enter Question" required style="color:grey;"></td>
                </tr>
	           
               <tr>
                    <td style="padding: 10px">Mark:</td>
                    <td style="padding: 10px"><select name="marks" id="marks" placeholder="marks" required style="color:grey;">
            		<option value="na">Marks</option>
            		<option value="2">1</option>
                    <option value="2">2</option>
            		<option value="5">5</option>
            		<option value="8">8</option>
            		<option value="10">10</option>
                   	</select>
                    </td>
                </tr>
	
                <tr>
                    <td style="padding: 10px">Complexity</td>
                    <td style="padding: 10px"><select name="comp" id="comp" placeholder="complexity" required style="color:grey;">
            		<option value="na">Complexity</option>
            		<option value="easy">Easy</option>
            		<option value="mod">Moderate</option>
            		<option value="diff">Difficult</option>
            	    </select></td>
                </tr>
	
                <tr>
                    <td style="padding: 10px">Subject:</td>
                    <td style="padding: 10px"><select name="sub" id="sub" placeholder="Select Subject" required style="color:grey;">
            		<option value="na">Subject</option>
            		<option value="ds">DS</option>
            		<option value="se">SE</option>
            		<option value="sws">SWS</option>
            		<option value="dmbi">DMBI</option>
            		<option value="ait">AIT</option>
            	    </select></td>
                </tr>
	
		
                <tr><td style="padding: 10px">Module:</td>
                    <td style="padding: 10px"><select name="module" id="module" placeholder="Module" required style="color:grey;">
            		<option value="na">Module</option>
            		<option value="one">1</option>
            		<option value="two">2</option>
            		<option value="three">3</option>
            		<option value="four">4</option>
            		<option value="five">5</option>
            	    </select></td>
                </tr>

                <tr>
                    <td colspan="2" style="padding: 10px; text-align: center"><input type="hidden" name="check" value="0" />
	                <input type="checkbox" name="check" id="check" value="1">No more questions to add</td>
                </tr>
	
                <tr>
                    <td colspan="2" style="padding: 10px; text-align: center"><input class="btn btn-primary" type="submit" value="Add another Question" style="color:black; margin-top: 10px;">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>
<hr>
</body>
</html>