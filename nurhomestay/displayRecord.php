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

 //escape special characters in a string
 $advisor = mysqli_real_escape_string($conn, $_POST['advisor_name']);
 //create and execute query
 $sql = "SELECT * FROM booking WHERE CustName= '$advisor'";
 $result = $conn->query($sql);
 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo 'Selected record as the following: <br><br>';
 echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
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
 echo "<td align='center'><a href='updateRecord.php?pid=$row[CustName]'> UPDATE </a>
 </td>";
 echo '</tr>';
 }
 echo '</table></p>';
 }
 else {
 echo '<font color=red>No record found';
 }
 //close connection
 $conn->close();
?>
