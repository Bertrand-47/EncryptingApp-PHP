<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<title>Encryption Algorithm</title>
<link rel="stylesheet" href="css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript">
	var blink_speed = 1000
	var t = setInterval(function () {
    var ele = document.getElementById('adv');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);
	
</script>
</head>
<body>
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-xs-12">
				<form action="" method="post" id="inputer">
	<h2>Encryption Algorithm</h2>	
	<hr/>
	<div id="box">
Enter Your Plain Text::<input type="text" id="plain" name="plain" placeholder="Plain Text" class="form-control col-lg-12 col-md-12 col-xs-4">
<br/>
<br/>
	<input type="submit" value="Encrypt Now!" name="Encrypt" class="btn btn-primary">
	</div>
	<div id="output">
		
		<?php
		if(isset($_POST['Encrypt']))
{
	echo "<h2 id=>Produced Hashes</h2>";
	$a=$_POST['plain'];
	if(strlen($a)==0)
	{
		echo "<script>alert('Enter Some Text Please')</script>";
	}
	else
	{
$b=md5($a);
echo "<p style='background-color:#33ffca; font-size:17px; font-weight:bold; font-family:Courier; height:30px;'>Your Plain Text: $a</p>";
echo "<p style='background-color:yellow; font-size:17px;font-family:Courier; font-weight:bolder; height:30px;'>MD5 Hashes:$b</p>";
echo "<br>";
for ($i = 0; $i < strlen($b); $i++)
{
    

    $letter_index=$b[$i];
		
		if($letter_index=='a')
		{
			$letter_index='*';
		}
		else if($letter_index=='b')
		{
			$letter_index='#';
		}
		else if($letter_index=='c')
		{
			$letter_index='}';
		}
		else if($letter_index=='d')
		{
			$letter_index='{';
		}
		else if($letter_index=='e')
		{
			$letter_index=='(';
		}
		else if($letter_index=='f')
		{
			$letter_index='!';
			
		}
		else if($letter_index=='g')
		{
			$letter_index='$';
		}
		else if($letter_index=='h')
		{
			$letter_index='%';
		}
		else if($letter_index=='i')
		{
			$letter_index=')';
		}
		else if($letter_index=='j')
		{
			$letter_index='|';
		}
		else if($letter_index=='k')
		{
			$letter_index='a';
		}
		else if($letter_index=='l')
		{
			$letter_index='+';
		}
		else if($letter_index=='m')
		{
			$letter_index='-';
		}
		else if($letter_index=='n')
		{
			$letter_index='p';
		}
		else if($letter_index=='o')
		{
			$letter_index='b';
		}
		else if($letter_index=='p')
		{
			$letter_index='c';
		}
		else if($letter_index=='q')
		{
			$letter_index='m';
		}
		else if($letter_index=='r')
		{
			$letter_index='/';
		}
		else if($letter_index=='s')
		{
			$letter_index='g';
		}
		else if($letter_index=='t')
		{
			$letter_index='f';
		}
		else if($letter_index=='u')
		{
			$letter_index='[';
		}
		else if($letter_index=='v')
		{
			$letter_index='^';
		}
		else if($letter_index=='w')
		{
			$letter_index='@';
		}
		else if($letter_index=='x')
		{
			$letter_index='&';
		}
		else if($letter_index=='y')
		{
			$letter_index='~';
		}
		else if($letter_index=='z')
		{
			$letter_index='`';
		}
		else if($letter_index=='0')
		{
			$letter_index='5';
		}
		else if($letter_index=='1')
		{
			$letter_index='9';
		}
		else if($letter_index=='2')
		{
			$letter_index='3';
		}
		else if($letter_index=='3')
		{
			$letter_index='0';
		}
		else if($letter_index=='4')
		{
			$letter_index='1';
		}
		else if($letter_index=='5')
		{
			$letter_index='2';
		}
		else if($letter_index=='6')
		{
			$letter_index='8';
		}
		else if($letter_index=='7')
		{
			$letter_index='4';
		}
		else if($letter_index=='8')
		{
			$letter_index='6';
		}
		else if($letter_index=='9')
		{
			$letter_index='7';
		}
	$b[$i]=$letter_index;
}
echo "<p style='background-color: #1f8b89 ; font-size:17px;font-family:Courier; font-weight:bolder; color:black; height:30px;' >Hashes Produced By Substitution Algorithm: $b</p>";
}


}
	?>
		
	</form>
	<div id="caption" style="background-color: #93b6ae ; margin-top:5%; font-family:cambria">
			<h3 id="adv" style="color:  #c32121 ; transition: 0.3s; margin-top:;  text-align: center; font-weight: bold;">Important Information</h3>
			<p>
				This is an experimental Algorithm Created based on Substitution Algorithm.
				Once a string is entered the program loop on each and every character in a specified string and substitute them based on the algorithm the programmer supplied.
			</p>

			<p>
				It has Draw Back , Hence this <b>Algorithm is vulnerable to Plain-Text Attack known in Cryptography</b>. So it not safe to use it when storing sensitive data. However it can be implemented as a supplement to Hashing Algorithms like MD5, SHA12,ETC. To create a more complex authentication system.

			</p>
	</div>
			</div>
		</div>
	</div>
	<br/>
	

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
