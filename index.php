<!DOCTYPE html>
<html>

<head>
  <title>Polititroll</title>
</head>

<body>
	<h1>Empowering you to troll your friends this election season!</h1>
	<br><br>

<form action="trollBlast.php" method="post">
<legend></legend>
Phone Number:<br>
<input type="text" name="phone">
<br>
Your Name:<br>
<input type="text" name="sender">
<br>
Candidate: (this isnt turned on yet)<br>

<!--

	<select name="candidate">
-->
<?php
//echo "badb";
//require 'connectionString.php';
//echo "something";
//$sql = mysql_query("SELECT candidate FROM Candidate");
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
////        echo "<option value='".$row['candidate']."'>" . $row['candidate'] . "</option>";
//		echo $row['candidate'];
//		echo "lalala";
//    }
//}
?>
<!--

<option vale="test">test</option>

</select>
-->

<br><br>
	<b>Troll</b> your friends if they support the candidate you selected, and need to learn a thing or two!
<br><br>
	<b>Applaud</b> your friends if they know the candidate you selected is a joke!
<br><br>

<input type="submit" name="troll" value="Troll">
<input type="submit" name="applaud" value="Applaud">



</form>

</body>
</html>
