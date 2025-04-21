<?php
$conn = new mysqli("localhost", "root", "", "university");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM student");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid #888; padding: 10px; text-align: center; }
        th { background-color: #ccc; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
<h2 style="text-align:center;">Student List</h2>

<table>
<tr>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Roll No</th>
    <th>DOB</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>X</th>
    <th>XII</th>
    <th>Aadhar</th>
    <th>Course</th>
    <th>Branch</th>
    <th>Actions</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['fatherName']}</td>
            <td>{$row['rollno']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['address']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['email']}</td>
            <td>{$row['X']}</td>
            <td>{$row['XII']}</td>
            <td>{$row['adhar']}</td>
            <td>{$row['course']}</td>
            <td>{$row['branch']}</td>
            <td>
                <a href='edit.php?rollno={$row['rollno']}'>Edit</a> | 
                <a href='delete.php?rollno={$row['rollno']}' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='13'>No data found</td></tr>";
}

$conn->close();
?>
</table>
</body>
</html>
