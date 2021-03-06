<!DOCTYPE>
<html>
<head>
	<title>Dev</title>
</head>
<body>

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
  width: 50%;
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
  background-color: #FFFFCC;
}
</style>

<div align="center" >You can see the source code of this website at <a href="www.github.com/ishanmathur">github</a><br>
	Mail me at:<a href="mailto: tonystark@iname.com">Tony Stark</a>
</div>

	<div class="top">
		<h2>We'll categorise the problem in 2 parts:<br>
		1.) UI/UX problem<br>
		2.) Backend<br></h2>
	</div>

 	<div class="row">

  <div class="column">
    <div class="card"><br><br><br>
      <h3>UI/UX problems</h3>
 		<p><br><br><br>
 			It requires a lot of changes like:<br>
 			Better responsive design for every screen size<br>
 			Better Animation style for the Form<br><br>
 			How to make a the website more useful and better :
 			<form action="sug.php">
 				<input type="text" class="name1" id="name1" name="name1" placeholder="name and number"/><br>
 				<textarea id="ui" class="ui" rows="3" cols="30" required ></textarea><br>
 				<input type="submit" value="Make contribution" />
 			</form><br><br><br><br>
 		</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Backend Problems</h3>
 		<p>
 			<b>Current problems:<br></b>
 			Security<br>
 			Order menu should have <b>cart.</b><br>
 			<b>Cancel option</b> for orders.<br>
 			<b>Change option</b> for ordered one.<br>
 			<b>PHP</b> for placed order has a <b>bug.</b><br><br>
 			<b>Functionality:</b><br>
 			<b>Invoice</b> of Placed Order available for print and should be mailed.<br>
 			<b>Database</b> could be added for orders. (For now simply stored in PHP)<br>
 			<b>Account</b> creation for regular automatic orders<br>
 			<b>Messenginig</b> platform using<b> AJAX and Erlang</b><br><br>
 			<b>Mobile App Development!</b><br><br>
 			What can be done to make this website have more functionality:
 			<form action="sug.php">
 				<input type="text" id="name2" class="name2" name="name2" placeholder="name and number"/><br>
 				<textarea id="be" class="be" rows="3" cols="30" required ></textarea><br>
 				<input type="submit" value="Make contribution" />
 			</form>
 		</p>
    </div>
  </div>

</div>

</body>
</html>