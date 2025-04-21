<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['rollno'])) {  // Use rollno for students
    $rollno = $_GET['rollno'];

    // SQL query to delete the student record
    $sql = "DELETE FROM student WHERE rollno='$rollno'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the student list page after deleting the record
        header("Location: view.php");  // Assuming view.php shows the student list
        exit(); // Stop further script execution
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
