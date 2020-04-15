<!DOCTYPE html>
<html>
<body background="backg.jpeg">

	<form action="Homepage.php"method="post">

		<style> 
	.headcenter{text-align:center}

	.important-message {
   font-weight: bold;
	}
	.awesomeText {
    font-size: 150%;
}

	.search {
		width: 200px;  height: 10000em;
	
		margin-left: 45%

	}
	</style>
<div class='awesomeText'>

	<span class="important-message">
	 <title> order summary </title>
 	<h1 class="headcenter">your order summary</h1>
	
	 <p class="headcenter">Date And Time: 
	 <span style="color:#0000FF ;text-align:center;"> 
	<?php echo(strftime("%m/%d/%Y %H:%M:%S")); ?></p>
	
	
	<p class="headcenter"> you have ordered </P>

	<p class="headcenter"> Bun </P>
	</span>

	<p class="serif">

	<div class="col-md-6 col-md-offset-3" align="center">
	<span style="color:#0000FF ;text-align:center;"> 
	<span class="important-message">

	
	<?php 
	if(isset($_POST['checkbox1'])){
		echo $Sesame_Bun = $_POST['checkbox1']; 
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox2'])){
		echo $Kaiser_Rol = $_POST['checkbox2'];	
		echo "<br>";
		echo "\n";
	}

	if(isset($_POST['checkbox3'])){
		echo $Gluten_free = $_POST['checkbox3'];
		echo "<br>";
		echo "\n";
	}
	
	if(isset($_POST['checkbox5'])){
		echo $lettuce_wrap = $_POST['checkbox5'];
		echo "<br>";
		echo "\n";
	}
	
?>
</p> </span></span>

<span class="important-message">
	<p class="headcenter"> Patties </P>
</span>

<span style="color:#0000FF ;text-align:center;">
<span class="important-message">

<p>
	
	<?php 

	if(isset($_POST['checkbox6'])){
		echo $Sesame_Bun = $_POST['checkbox6']; 
		echo "<br>";
		echo "\n";
	}

	if(isset($_POST['checkbox7'])){
		echo $Kaiser_Rol = $_POST['checkbox7'];
		echo "<br>";
		echo "\n";

	}
	if(isset($_POST['checkbox8'])){
		echo $Gluten_free = $_POST['checkbox8'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox9'])){
		echo $lettuce_wrap = $_POST['checkbox9'];
		echo "<br>";
		echo "\n";
	}

?></p></span></span>



	<span class="important-message">
	<p class="headcenter"> Cheese </P>
	</span>

	<span style="color:#0000FF ;text-align:center;"> 
	<span class="important-message">
<p>
	
	<?php 

	if(isset($_POST['checkbox11'])){
		echo $Sesame_Bun = $_POST['checkbox11']; 
		echo "<br>";
		echo "\n";
	}

	if(isset($_POST['checkbox12'])){
		echo $Kaiser_Rol = $_POST['checkbox12'];
		echo "<br>";
		echo "\n";

	}
	if(isset($_POST['checkbox13'])){
		echo $Gluten_free = $_POST['checkbox13'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox14'])){
		echo $lettuce_wrap = $_POST['checkbox14'];
		echo "<br>";
		echo "\n";
	}

?></p></span></span>

	
	
	<span class="important-message">
	<p class="headcenter"> Extra </P>
	</span>

	<span style="color:#0000FF ;text-align:center;"> 
	<span class="important-message">
	<p>
	
	<?php 

	if(isset($_POST['checkbox15'])){
		echo $Mayo = $_POST['checkbox15']; 
		echo "<br>";
		echo "\n";
	}
	
	if(isset($_POST['checkbox16'])){
		echo $Ketchup = $_POST['checkbox16'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox17'])){
		echo $Mustard = $_POST['checkbox17'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox18'])){
		echo $Egg = $_POST['checkbox18'];
		echo "<br>";
		echo "\n";

	}if(isset($_POST['checkbox19'])){
		echo $Bacon = $_POST['checkbox19'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox20'])){
		echo $Tomato = $_POST['checkbox20'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox21'])){
		echo $lettuce = $_POST['checkbox21'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox22'])){
		echo $Pickle = $_POST['checkbox22'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox23'])){
		echo $Onion = $_POST['checkbox23'];
		echo "<br>";
		echo "\n";
	}
	if(isset($_POST['checkbox24'])){
		echo $Mushroom = $_POST['checkbox24'];
		echo "<br>";
		echo "\n";
	}
	

?></p></div>
</span> </span>
</div>
<input type="submit" id="search" value="Confirm" class="search" /><br>

</body>
</html>