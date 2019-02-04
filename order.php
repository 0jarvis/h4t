<!DOCTYPE>
<html>
<head>
	<title> Fresh Fruits </title>
	
	<script src="asd.js"></script>
	
	<link rel="stylesheet" type="text/css" href="st.css">
	<link rel="stylesheet" type="text/css" href="counter.css">

</head>
<body onload="incrementCount(10)">

	<div class="topp">

		<div class=headerr> <h2 align="center">Fresh Fruits available at your doorstep.<br>Only for thaparians.</h2> </div><br>
		<div class="imagee"> <img width="800px" height="400px" src="front.jpg" border="2px" alt="" /> </div>

	</div> <br>

	<div class="formm">
		
		<form action="welcome.php" method="post">
			
			<input id="name" type="text" name="name" placeholder="Your Name" required /><br/>

			<input id="number" type="tel" pattern="[0-9]{10}" name="number" placeholder="Your Contact Number" required /><br/>


			<select id="hoatel" name="hostel">
      			<option value="A">Hostel A</option>
      			<option value="B">Hostel B</option>
      			<option value="C">Hostel C</option>
      			<option value="D">Hostel D</option>
      			<option value="E">Hostel E</option>
      			<option value="F">Hostel F</option>
      			<option value="G">Hostel G</option>
      			<option value="H">Hostel H</option>
      			<option value="I">Hostel I</option>
      			<option value="J">Hostel J</option>
      			<option value="K">Hostel K</option>
      			<option value="L">Hostel L</option>
      			<option value="M">Hostel M</option>
      			<option value="N">Hostel N</option>
      		</select>
			
			

			<div class="fruitsname">
			<p class="whatt"> Fruits for you:<br/> </p>

			<div class="applee">
				<input type="checkbox" id="apple" name="fruits[]" value="Apple" onClick="myApple()"/><b>Apple</b> <i>Rs. 100 per kg</i><br/>
				<p id="applecost" style="display:none">
				<select >
  						<option value="250">250g Apple</option>
  						<option value="500">500g Apple</option>
  						<option value="750">750g Apple</option>
  						<option value="1000">1kg Apple</option>
				</select></p>

				<script>

					function myApple() {
  					var checkBox = document.getElementById("apple");
  					var text = document.getElementById("applecost");
  					if (checkBox.checked == true){
    				text.style.display = "block";
  							}
  					else { text.style.display = "none";	}
					}
					
				</script>

			</div>

			<div class="bananaa">
				<input type="checkbox" id="banana" name="fruits[]" value="Banana" onclick="myBanana()" /><b>Banana</b> <i>Rs. 60 per kg</i><br/>
				<p id="bananacost" style="display:none">
				<select >
  						<option value="250">250g Banana</option>
  						<option value="500">500g Banana</option>
  						<option value="750">750g Banana</option>
  						<option value="1000">1kg Banana</option>
				</select></p>

				<script>

					function myBanana() {
  					var checkBox = document.getElementById("banana");
  					var text = document.getElementById("bananacost");
  					if (checkBox.checked == true){
    				text.style.display = "block";
  							}
  					else { text.style.display = "none";	}
					}
					
				</script>
			</div>
			
			<div class="guavaa">
				<input type="checkbox" id="guava" name="fruits[]" value="Guava" onclick="myGuava()" /><b>Guava</b> <i>Rs. 50 per kg</i><br/>
				<p id="guavacost" style="display:none">
				<select >
  						<option value="250">250g Guava</option>
  						<option value="500">500g Guava</option>
  						<option value="750">750g Guava</option>
  						<option value="1000">1kg Guava</option>
				</select></p>

				<script>

					function myGuava() {
  					var checkBox = document.getElementById("guava");
  					var text = document.getElementById("guavacost");
  					if (checkBox.checked == true){
    				text.style.display = "block";
  							}
  					else { text.style.display = "none";	}
					}
					
				</script>
			</div>
			
			</div>

			Any comment: <textarea name="comment" id="comment" rows="3" cols="30"></textarea><br>

			<input type="submit" value="Place Order">


		</form>

	</div>

	<div class="datee">	Today' Date is: <?php echo date("d/m/Y"); ?> </div>

	<br>

	 <a href='https://www.symptoma.es/'>Symptoma.es</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=a70ac4b25490559abe9acb037f8421c89c53e882'></script>
		<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/482737/t/2"></script>

	<div class="footerr" align="right">
	<p> <h3><b>NOTE:</b></h3> This site is still under construction, and<br>requires a lot of PHP, JS and Python scripting.<br>Anyone willing to help is welcomed.<br>Please contact through mail: <a href="mailto: tonystark@iname.com">Tony Stark</a><br>
	<h3><b>Sorry for any inconvinience! :)</b></h3> </p>
	<p align="center"> <b>&copy Ishan Mathur</b> Production</p>
	</div>	

</body>