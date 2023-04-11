<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	<Style>
		.c1{
			font-size:20px;
			padding-top:20px;
			padding-bottom:20px;
			color:black;
		}
		.c2{
			font-size:20px;
			padding-top:20px;
			padding-bottom:20px;
			color:black;
		}
		#formItem label{
			text-align:center;
		}
		.c3{
			text-align:center;
			margin-left:230px;
			background-color:skyblue;
			width:100px;
			height:40px;
			border:1px solid black;
			border-radius:20px;
		}
		.well{
			background-color:;
		}
	</Style>
<body style="background-color:aqua;">
	<nav class="navbar navbar-default">
		<div class="c1" align="center">
			Exponential Calculator :  S.Deepan - 19MIS0102
		</div>
	</nav>
	<div class="c1" align="center">
			
		</div>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="c2" align="center">Exponential Smoothing Calculator</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="post">
				<div class="form-group">
					<label>Alpha 1</label>
					<input style="width:550px;"type="number" class="form-control" name="alpha1" step="0.01" required="required"/>
				</div>
				<div class="form-group">
					<label>Alpha 2</label>
					<input style="width:550px;"type="number" class="form-control" name="beta1" step="0.01" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 1</label>
					<input style="width:550px;"type="number" class="form-control" name="demand1" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 2</label>
					<input style="width:550px;"type="number" class="form-control" name="demand2" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 3</label>
					<input style="width:550px;"type="number" class="form-control" name="demand3" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 4</label>
					<input style="width:550px;"type="number" class="form-control" name="demand4" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 5</label>
					<input style="width:550px;"type="number" class="form-control" name="demand5" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 6</label>
					<input style="width:550px;"type="number" class="form-control" name="demand6" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 7</label>
					<input style="width:550px;"type="number" class="form-control" name="demand7" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 8</label>
					<input style="width:550px;"type="number" class="form-control" name="demand8" required="required"/>
				</div>
				<div class="form-group">
					<label>Demand 9</label>
					<input style="width:550px;"type="number" class="form-control" name="demand9" required="required"/>
				</div>

				<button class="c3" value="add" name="add">Add</button>
			</form>
		</div>
		<br>
		<br>
		
					<?php
					echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
						
						if(isset($_POST['add']))
						{
							$a2=$_POST['alpha1'];
							$a1= doubleval($a2);
							$a3=$_POST['beta1'];
							$a4= doubleval($a3);
							$d1=$_POST['demand1'];
							$d2=$_POST['demand2'];
							$d3=$_POST['demand3'];
							$d4=$_POST['demand4'];
							$d5=$_POST['demand5'];
							$d6=$_POST['demand6'];
							$d7=$_POST['demand7'];
							$d8=$_POST['demand5'];
							$d9=$_POST['demand9'];
							$f1=$_POST['demand1'];

							$f2=$d1+$a1*($d1-$f1);
							$f3=$f2+$a1*($d2-$f2);
							$f4=$f3+$a1*($d3-$f3);
							$f5=$f4+$a1*($d4-$f4);
							$f6=$f5+$a1*($d5-$f5);
							$f7=$f6+$a1*($d6-$f6);
							$f8=$f7+$a1*($d7-$f7);
							$f9=$f8+$a1*($d8-$f8);
							$f10=$f9+$a1*($d9-$f9);

							$f22=$d1+$a4*($d1-$f1);
							$f33=$f2+$a4*($d2-$f2);
							$f44=$f3+$a4*($d3-$f3);
							$f55=$f4+$a4*($d4-$f4);
							$f66=$f5+$a4*($d5-$f5);
							$f77=$f6+$a4*($d6-$f6);
							$f88=$f7+$a4*($d7-$f7);
							$f99=$f8+$a4*($d8-$f8);
							$f100=$f9+$a4*($d9-$f9);
							

							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");	
							echo "<p style='color:#0089ff;padding-left:230px;font-size:20px;'>"."Alpha 1 output  "."<br>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F1 : ".number_format((float)$d1,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F2 : ".number_format((float)$f2,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F3 : ".number_format((float)$f3,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F4 : ".number_format((float)$f4,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F5 : ".number_format((float)$f5,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F6 : ".number_format((float)$f6,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F7 : ".number_format((float)$f7,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F8 : ".number_format((float)$f8,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F9 : ".number_format((float)$f9,1,'.','')."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F10 : ".number_format((float)$f10,1,'.','')."</p>";

							echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
							echo "<p style='color:#0089ff;padding-left:230px;font-size:20px;'>"."Alpha 2 output  "."<br>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F1 : ".round($d1)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F2 : ".round($f22)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F3 : ".round($f33)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F4 : ".round($f44)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F5 : ".round($f55)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F6 : ".round($f66)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F7 : ".round($f77)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F8 : ".round($f88)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F9 : ".round($f99)."</p>";
							echo nl2br("\n");
							echo "<p style='padding-left:260px;font-size:16px;'>"."F10 : ".round($f100)."</p>";
							
							$file_open = fopen("contact_data.csv", "a");
							$no_rows = count(file("contact_data.csv"));
							if($no_rows > 1)
							{
							$no_rows = ($no_rows - 1) + 1;
							}
							$form_data = array(
							"sr_no"  => $no_rows,
							
							"F1"  => $d1,
							'F2' => $f2,
							'F3' => $f3,
							'F4' => $f4,
							'F5' => $f5,
							'F6' => $f6,
							'F7' => $f7,
							'F8' => $f8,
							'F9' => $f9,
							'F10' => $f10,

							'F11' => $d1,
							'F12' => $f22,
							'F13' => $f33,
							'F14' => $f44,
							'F15' => $f55,
							'F16' => $f66,
							'F17' => $f77,
							'F18' => $f88,
							'F19' => $f99,
							'F20' => $f100,
							);
							fputcsv($file_open, $form_data);
							$error = '<label class="text-success">Thank you for contacting us</label>';
							
						}
					?>
	</div>
</body>	
</html>