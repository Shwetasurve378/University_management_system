<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Student Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>FatherName</th>
            <th>Roll no</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>X</th>
            <th>XII</th>
            <th>Adhar</th>
            <th>Course</th>
            <th>Branch</th>

        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
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
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No data found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>