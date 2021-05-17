<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<title> Length Converter </title>


</head>

<body>

<div class="conv"><h1>Length Converter</h1></div>

<form  action="lengthconverter.php" method="post">
<br><br>
<div class="box">
<table>
	<tr>
	<td>
		Enter a Number Convert: <input class="length" type="text" name="amount" placeholder="Length"><br>
	</td>
	</tr>

<tr>
<td>
	<br>From: <select name='cur1'>
	 <option value="mm">mm</option>
	 <option value="cm">cm</option>
	 <option value="in">in</option>
	 <option value="dm">dm</option>
	 <option value="m">m</option>
	 <option value="km">km</option>
	 <option value="ft">ft</option>
	 <option value="yd">yd</option>
	 <option value="ch">ch</option>
	 <option value="fur">fur</option>
	 <option value="mi">mi</option>

	 </select>
</td>
</tr>
<tr>
	<td>
	<br>To: <select name='cur2'>
	 <option value="mm">mm</option>
	 <option value="cm">cm</option>
	 <option value="in">in</option>
	 <option value="dm">dm</option>
	 <option value="m">m</option>
	 <option value="km">km</option>
	 <option value="ft">ft</option>
	 <option value="yd">yd</option>
	 <option value="ch">ch</option>
	 <option value="fur">fur</option>
	 <option value="mi">mi</option>
	
	</select>
</td>
</tr>
<tr>
<td><br>
<button class="button" input type='submit' name='submit'>Convert</button>
</td>
</tr>
</table>
</form>

<br><br><br><br><br>
</div>
<div class="result">

<br>
<br>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

//cm to mm vice versa
if($cur1=="cm" && $cur2=="mm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*10 . " mm</center>";
}
if($cur1=="mm" && $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/10 . " cm</center>";
}

// dm to cm
if($cur1=="dm" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 10 . " cm</center>";
}
if($cur1=="cm" AND $cur2=="dm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 10 . " dm</center>";
}

//m to cm
if($cur1=="m" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 100 . " cm</center>";
}
if($cur1=="cm" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 100 . " m</center>";
}

//km to m
if($cur1=="km" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1000 . " m</center>";
}
if($cur1=="m" AND $cur2=="km"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 1000 . " km</center>";
}


//ft to in
if($cur1=="ft" AND $cur2=="in"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 12 . " in</center>";
}
if($cur1=="in" AND $cur2=="ft"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 12 . " ft</center>";
}


//yd to ft
if($cur1=="yd" AND $cur2=="ft"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 3 . " ft</center>";
}
if($cur1=="ft" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 3 . " yd</center>";
}


//ch to yd
if($cur1=="ch" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 22 . " yd</center>";
}
if($cur1=="yd" AND $cur2=="ch"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 22 . " ch</center>";
}


//fur to yd
if($cur1=="fur" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 220 . " yd</center>";
}
if($cur1=="yd" AND $cur2=="fr"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 220 . " fr</center>";
}

//mi to yd
if($cur1=="mi" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1760 . " yd</center>";
}
if($cur1=="yd" AND $cur2=="mi"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 1760 . " mi</center>";
}

//mm to in
if($cur1=="mm" AND $cur2=="in"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.03937 . " in</center>";
}
if($cur1=="in" AND $cur2=="mm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 0.03937 . " mm</center>";
}

//cm to in
if($cur1=="cm" AND $cur2=="in"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.39370 . " in</center>";
}
if($cur1=="in" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 0.39370 . " cm</center>";
}


//m to in
if($cur1=="m" AND $cur2=="in"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 39.37008 . " in</center>";
}
if($cur1=="in" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 39.37008 . " m</center>";
}


//m to ft
if($cur1=="m" AND $cur2=="ft"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 3.28084 . " ft</center>";
}
if($cur1=="ft" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 3.28084 . " m</center>";
}


//m to yd
if($cur1=="m" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.09361 . " yd</center>";
}
if($cur1=="yd" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/ 1.09361 . " m</center>";
}


//km to yd
if($cur1=="km" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1093.6133 . " yd</center>";
}
if($cur1=="yd" AND $cur2=="km"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  1093.6133  . " km</center>";
}

//km to mi
if($cur1=="km" AND $cur2=="mi"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.62137 . " mi</center>";
}
if($cur1=="mi" AND $cur2=="km"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  0.62137  . " km</center>";
}


//in to cm
if($cur1=="in" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 2.54 . " cm</center>";
}
if($cur1=="cm" AND $cur2=="in"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  2.54  . " in</center>";
}


//ft to cm
if($cur1=="ft" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 30.48 . " cm</center>";
}
if($cur1=="cm" AND $cur2=="ft"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  30.48  . " ft</center>";
}


//yd to cm
if($cur1=="yd" AND $cur2=="cm"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 91.44 . " cm</center>";
}
if($cur1=="cm" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  91.44  . " yd</center>";
}


//yd to m
if($cur1=="yd" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.9144 . " m</center>";
}
if($cur1=="m" AND $cur2=="yd"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  0.9144  . " yd</center>";
}

//mi to m
if($cur1=="mi" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1609.344 . " m</center>";
}
if($cur1=="m" AND $cur2=="mi"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  1609.344  . " mi</center>";
}

//m to km
if($cur1=="m" AND $cur2=="km"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.609344 . " km</center>";
}
if($cur1=="km" AND $cur2=="m"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount/  1.609344  . " m</center>";
}
}
?>
</div>
</div>
</body>



</html>
