<html>
<head>
 <title>NURHOMESTAY</title>
</head>
<body>
 <h3 align="center" style="color: #2dac24;">BOOKING LIST NURHOMESTAY</h3>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "nurhomestay";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //create and execute query
 $sql = "SELECT * FROM booking";
 $result = $conn->query($sql);
 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Booking ID</b></td>
 <td align="center"><b>Customer Name</b></td>
 <td align="center"><b>Contact</b></td>
 <td align="center"><b>Email</b></td>
 <td align="center"><b>Date of Arrival</b></td>
 <td align="center"><b>Date of Leaving</b></td>
 <td align="center"><b>Place Name</b></td>
 <td align="center"><b>Packages</b></td></tr>';

 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo '<tr>';
 echo '<td align="center">'.$row["Bil"].'</td>';
 echo '<td align="center">'.$row["BookingID"].'</td>';
 echo '<td align="center">'.$row["CustName"].'</td>';
 echo '<td align="center">'.$row["Contact"].'</td>';
 echo '<td align="center">'.$row["Email"].'</td>';
 echo '<td align="center">'.$row["Arrivals"].'</td>';
 echo '<td align="center">'.$row["Leaving"].'</td>';
 echo '<td align="center">'.$row["PlaceName"].'</td>';
 echo '<td align="center">'.$row["Packages"].'</td>';
 echo '</tr>';
 }
 }
 else {
 echo "0 results"; //if no record found in the database
 }
 //close connection
 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>