<html>
<head>
<title>NURHOMESTAY</title>
</head>
<body>
 <?php

 $date = date("d-m-Y");
 //get input values from form
 extract($_POST);
 ?>
 <p>Date: <b><?php print($date) ?></b></p>
 <h3>NURHOMESTAY REGISTRATION</h3>
 <table>

 <tr><td>Booking ID</td>
    <td>:</td>
    <td><b><?php print($adBookingID) ?></b></td>
 </tr>

 <tr><td>Cust.Name</td>
    <td>:</td>
    <td><b><?php print($adName) ?></b></td>
 </tr>

 <tr><td>Contact</td>
    <td>:</td>
    <td><b><?php print($adContact) ?></b></td>
 </tr>

 <tr><td>Email</td>
    <td>:</td>
    <td><b><?php print($adEmail) ?></b></td>
 </tr>

 <tr><td>Arrivals</td>
 <td>:</td>
 <td><b><?php print($adArrivals) ?></b></td>
 </tr>

 <tr><td>Leaving</td>
 <td>:</td>
 <td><b><?php print($adLeaving) ?></b></td>
 </tr>

 <tr><td>Place Name</td>
 <td>:</td>
 <td><b><?php print($PlaceName) ?></b></td>
 </tr>

 <tr><td>Packages</td>
 <td>:</td>
 <td><b><?php print($Packages) ?></b></td>
 </tr>

 </table>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "nurhomestay";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error); }
 //create query
 $sql = "INSERT INTO booking ( BookingID, CustName, Contact, Email, Arrivals, Leaving,
    PlaceName, Packages) VALUES ('$adBookingID','$adName', '$adContact', '$adEmail', '$adArrivals', '$adLeaving',
    '$PlaceName', '$Packages')";

 //execute query
 if($conn->query($sql) === TRUE) {
 echo "New record created successfully";
 }
 else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 //close connection
 $conn->close();

 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
 ?>
 <br>
 <form>
 <input type="button" name="printButton" onClick="window.print()" value="Print">
 </form>
</body>
</html>