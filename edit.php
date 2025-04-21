<?php
$conn = new mysqli("localhost", "root", "", "university");

$rollno = $_GET['rollno'];
$result = $conn->query("SELECT * FROM student WHERE rollno = '$rollno'");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <style>
        form { width: 50%; margin: auto; padding: 20px; border: 1px solid #ccc; }
        label { display: block; margin: 10px 0 5px; }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px; background-color: #4CAF50; color: white; border: none;
        }
    </style>
</head>
<h2 style="text-align:center;">Edit Student</h2>
<form action="update.php" method="post">
    <input type="hidden" name="rollno" value="<?= $row['rollno'] ?>">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Father's Name: <input type="text" name="fatherName" value="<?= $row['fatherName'] ?>"><br>
    Date of Birth: <input type="date" name="dob" value="<?= $row['dob'] ?>"><br>
    Address: <input type="text" name="address" value="<?= $row['address'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"><br>
    Class X(%): <input type="text" name="X" value="<?= $row['X'] ?>"><br>
    Class XII(%): <input type="text" name="XII" value="<?= $row['XII'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $row['course'] ?>"><br>
    Branch: <input type="text" name="branch" value="<?= $row['branch'] ?>"><br>
    Aadhar: <input type="text" name="adhar" value="<?= $row['adhar'] ?>"><br><br>
    <input type="submit" value="Update">
</form>
</body>
</html>