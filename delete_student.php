// delete_student.php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentrecord";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $studentID = $_GET['id'];

    $deleteSql = "DELETE FROM student WHERE StudentID = $studentID";

    if (mysqli_query($conn, $deleteSql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

} else {
    echo "Invalid request.";
}

$conn->close();
?>
