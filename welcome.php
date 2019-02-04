<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    .come_area {
    background-image: url(img/bg-img/welcome-bg.png);
    height: 1000px;
    position: relative;
    z-index: 1;
    background-position: bottom center;
    background-size: cover;
		}
	.come_area > h4 {
		font-size: 30px;
    	color: #ffffff;
    	font-weight: 60;
    	position: relative;
    	z-index: 3;
		}
	</style>
</head>
<body>

<section class="come_area clearfix">

<h4 align="center">













<?php
  $fruitsErr = "";
  $fruits = $comment = "";

  if (empty($_POST["comment"])) {
    $comment = "";
  } 

  if (empty($_POST["fruits"])) {
    $fruitsErr = "";
  }

?>
















Thank You <b> <?php echo $_POST["name"]; ?> </b> <br><br>
Your Hostel is <b> <?php echo $_POST["hostel"]; ?></b><br><br>
You Ordered:<b> <br>

<?php
foreach($_POST['fruits'] as $value)
 {
 	$ff= fopen("orders.txt","a");
 	fwrite($ff, $value."\r\n");
    echo $value.' for Rs. <br/>';

 }
?>

<?php
if (isset($_POST["Set1"])) { echo $ap = $_POST["Set1"]."\n"; $ca = fopen("orders.txt","a"); fwrite($ca, $ap."\r\n"); }
if (isset($_POST['Set2'])) { echo $ba = $_POST["Set2"]."\n"; $cb = fopen("orders.txt","a"); fwrite($cb, $ba."\r\n"); }
if (isset($_POST['Set3'])) { echo $gu = $_POST["Set3"]."\n"; $cc = fopen("orders.txt","a"); fwrite($cc, $gu."\r\n"); }
if (isset($_POST['Set4'])) { echo $gr = $_POST["Set4"]."\n"; $cd = fopen("orders.txt","a"); fwrite($cd, $gr."\r\n"); }
?>

<br><br>

Your total is: <b> <?php echo $_POST["total"]; ?> </b><br><br>

<br>
We will contact you soon on: <b> <?php echo $_POST["number"]; ?> </b><br>

<p> And we'll remember:</p> 
<?php echo $_POST["comment"]; ?><br>
</h4>
</section>

	 <?php
$myfile = fopen("orders.txt", "a") or die("Unable to place order, please try again :(");
$name = $_POST["name"];
$hostel = $_POST["hostel"];
$comment = $_POST["comment"];
$total = $_POST["total"];
fwrite($myfile, "Name: ".$name."\r\n");
fwrite($myfile, "Hostel: ".$hostel."\r\n");
fwrite($myfile, "Comment: ".$comment."\r\n");
fwrite($myfile, "Total cost: ".$total."\r\n");
fwrite($myfile, date("d/m/Y")."\r\n\r\n\r\n");
fclose($myfile);
?> 



</body>
</html>