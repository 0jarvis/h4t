<!DOCTYPE html>
<html lang="en">
<head>
	<title>Place Order</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<style type="text/css">

fieldset {
    float: left;
    width: 600px;
    padding: 5px;
    margin-right: 4px;
}

#total {
    font-size: 11px;
    width: 100px;
}

</style>/


    <script type="text/javascript">

function setRadios()
{
    function sumRadios()
    {
        var total = 0, i = 1, oForm = this.form;
        while (radgrp = oForm.elements['Set' + (i++)])
        {
            j = radgrp.length;
            do
                if (radgrp[--j].checked)
                {
                    total += Number(radgrp[j].value);
                    break;
                }
            while (j);
        }
        oForm.elements.total.value = total.toFixed(2);
    }

var i = 0, input, inputs = document.getElementById('f1').getElementsByTagName('input');
while (input = inputs.item(i++))
    if (input.name.match(/^Set\d+$/))
        input.onclick = sumRadios;
}

onload = setRadios;

</script>








	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="effect1">

	<div class="bg-contact2" style="background-image: url('img/bg-01.png');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form action="welcome.php" id="f1" class="contact2-form validate-form" method="post">

					<span class="contact2-form-title">
						Welcome Thaparain
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name" required>
						<span class="focus-input2" data-placeholder="Your Name"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid phone number is required">
						<input class="input2" type="tel" pattern="[0-9]{10}" name="number" required>
						<span class="focus-input2" data-placeholder="Phone Number"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Hostel is required">
						<div class="hostel">
						<select id="hostel" name="hostel" class="form-control">
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
					</div></div>


					<span class="contact2-form-title">
						Fruits for you:
					</span>









<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>


<div class="row">
  <div class="column">
    <div class="card">

                <input type="checkbox" id="apple" name="fruits[]" value="Apple" onClick="myApple()"/>
                <img src="img/apple.png" alt="">
                <h3>Apple<br><p><i>Rs. 100 per kg</i></p></h3>
                <p id="applecost" style="display:none">
                <input type="radio" id="r1" name="Set1" <?php if (isset($Set1) && $Set1=="25") echo "checked";?> value="25"/>250g Apple<br>
                <input type="radio" id="r2" name="Set1" <?php if (isset($Set1) && $Set1=="50") echo "checked";?> value="50"/>500g Apple<br>
                <input type="radio" id="r3" name="Set1" <?php if (isset($Set1) && $Set1=="75") echo "checked";?> value="75"/>750g Apple<br>
                <input type="radio" id="r4" name="Set1" <?php if (isset($Set1) && $Set1=="100") echo "checked";?> value="100"/>1kg Apple<br>
                </p>

                <script>

                    function myApple() {
                    var checkBox = document.getElementById("apple");
                    var text = document.getElementById("applecost");
                    if (checkBox.checked == true){
                    text.style.display = "block";
                            }
                    else { text.style.display = "none"; }
                    }
                    
                </script>


</div>
  </div>

  <div class="column">
    <div class="card">

      <input type="checkbox" id="banana" name="fruits[]" value="Banana" onclick="myBanana()" />
                <img src="img/banana.png" alt="">
                <h3>Banana<br><p><i>Rs. 50 per kg</i></p></h3>
                <p id="bananacost" style="display:none">
                <input type="radio" id="r5" name="Set2" <?php if (isset($Set2) && $Set2=="12.5") echo "checked";?> value="12.5"/>250g Banana<br>
                <input type="radio" id="r6" name="Set2" <?php if (isset($Set2) && $Set2=="25") echo "checked";?> value="25"/>500g Banana<br>
                <input type="radio" id="r7" name="Set2" <?php if (isset($Set2) && $Set2=="37.5") echo "checked";?> value="37.5"/>750g Banana<br>
                <input type="radio" id="r8" name="Set2" <?php if (isset($Set2) && $Set2=="50") echo "checked";?> value="50"/>1kg Banana<br>
                </p>

                <script>

                    function myBanana() {
                    var checkBox = document.getElementById("banana");
                    var text = document.getElementById("bananacost");
                    if (checkBox.checked == true){
                    text.style.display = "block";
                            }
                    else { text.style.display = "none"; }
                    }
                    
                </script>

    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <input type="checkbox" id="guava" name="fruits[]" value="Guava" onclick="myGuava()" />
      <img src="img/guava.png" alt="">
      <h3>Guava<br><p><i>RSs. 40 per kg</i></p></h3>
                <p id="guavacost" style="display:none">
                <input type="radio" id="r9" name="Set3" <?php if (isset($Set3) && $Set3=="10") echo "checked";?> value="10"/>250g Guava<br>
                <input type="radio" id="r10" name="Set3" <?php if (isset($Set3) && $Set3=="20") echo "checked";?> value="20"/>500g Guava<br>
                <input type="radio" id="r11" name="Set3" <?php if (isset($Set3) && $Set3=="30") echo "checked";?> value="30"/>750g Guava<br>
                <input type="radio" id="r12" name="Set3" <?php if (isset($Set3) && $Set3=="40") echo "checked";?> value="40"/>1kg Guava<br>
                </p>

                <script>

                    function myGuava() {
                    var checkBox = document.getElementById("guava");
                    var text = document.getElementById("guavacost");
                    if (checkBox.checked == true){
                    text.style.display = "block";
                            }
                    else { text.style.display = "none"; }
                    }
                    
                </script>

    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <input type="checkbox" id="grapes" name="fruits[]" value="Grapes " onclick="myGrapes()" />
      <img src="img/grapes.png" alt="">
      <h3>Grapes<br><p><i>Rs. 60 per kg</i></p></h3>
                <p id="grapescost" style="display:none">
                <input type="radio" id="r13" name="Set4" <?php if (isset($Set4) && $Set4=="15") echo "checked";?> value="15"/>250g Grapes<br>
                <input type="radio" id="r14" name="Set4" <?php if (isset($Set4) && $Set4=="30") echo "checked";?> value="30"/>500g Grapes<br>
                <input type="radio" id="r15" name="Set4" <?php if (isset($Set4) && $Set4=="45") echo "checked";?> value="45"/>750g Grpaes<br>
                <input type="radio" id="r16" name="Set4" <?php if (isset($Set4) && $Set4=="60") echo "checked";?> value="60"/>1kg Grpaes<br>
                </p>

                <script>

                    function myGrapes() {
                    var checkBox = document.getElementById("grapes");
                    var text = document.getElementById("grapescost");
                    if (checkBox.checked == true){
                    text.style.display = "block";
                            }
                    else { text.style.display = "none"; }
                    }
                    
                </script>

    </div>
  </div>
<br><br></div>

                    <span class="contact2-form-title">
                    <fieldset style="position:relative;top:36px;width:670px;">
                        <strong><h2> Total cost:</h2></strong>
                    <input id="total" type="text" name="total" value="" />&nbsp;&nbsp;
                    <input type="reset" style="font-size:20px;" />
                    </fieldset></span>
                        <br><br>



					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea name="comment" id="comment" rows="3" cols="30"></textarea><br>
						<span class="focus-input2" data-placeholder="Any Comment"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Place Order
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</div>

<br><br>



    <div align="center" class="">
        <h3 style="color: #fb397d" > &copy; <b>Ishan Mathur</b> Production </h3> <br><br>
        <h5> <u><a href="#">Developer Section</a></u></h5><br><br>
    </div>


	
        
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>





</body>
</html>
