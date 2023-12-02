// update_student.php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentrecord";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $studentID = $_POST['studentID'];
    $studenfname = $_POST['studentFname'];

    // Add other fields as needed

    $updateSql = "UPDATE student SET FirstName = '$studenfname' WHERE StudentID = $studentID";

    if (mysqli_query($conn, $updateSql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$conn->close();
?>
