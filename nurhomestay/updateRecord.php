<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="nurhomestay";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'CustName' parameter is set in the URL
if(isset($_GET['CustName'])) {
    $adName = $_GET['CustName'];
    $adContact = mysqli_real_escape_string($conn, $_POST['Contact']); // Escape contact data
    $adEmail = mysqli_real_escape_string($conn, $_POST['Email']); // Escape email data

    // Update query to modify Contact and Email based on CustName
    $sql = "UPDATE booking SET Contact = '$adContact', Email = '$adEmail' WHERE CustName = '$adName'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Redirect back to the page where the records are displayed
    header("Location: displayRecord.php");
    exit;
} else {
    echo "No record selected for update.";
}

$conn->close();
?>
