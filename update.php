<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $X = $_POST['X'];
    $XII = $_POST['XII'];
    $adhar = $_POST['adhar'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    

    $sql = "UPDATE student SET 
    name='$name',
    fatherName='$fatherName',
    dob='$dob',
    address='$address',
    email='$email',
    phone='$phone',
    X='$X',
    XII='$XII',
    adhar='$adhar',
    course='$course',
    branch='$branch'
    WHERE rollno='$rollno'";


    if ($conn->query($sql) === TRUE) {
        echo "Student details updated successfully. <a href='view.php'>Back to List</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>