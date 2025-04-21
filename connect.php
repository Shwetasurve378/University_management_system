<?php
$name = $_POST['name'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];
$dob = $_POST['dob'];
$employee_id = $_POST['employee_id'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$department = $_POST['department'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'university');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Prepare SQL statement for the correct table
$stmt = $conn->prepare("INSERT INTO teacher(name, email, aadhar, dob, employee_id, phone, education, department) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $aadhar, $dob, $employee_id, $phone, $education, $department);

$execval = $stmt->execute();
if ($execval) {
    echo "Registration successfully...";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>