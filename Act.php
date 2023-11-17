<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentRecord";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "StudentID: " . $row["StudentID"] . "<br>" .
         "- Name: " . $row["FirtsName"]. " " . $row["LastName"]. "<br>" .
         " - DateOfBirth: " . $row["DateOfBirth"]. "<br>" .
         " - Email: " . $row["Email"]. 
        "<br>" .
        " - Phone: " . $row["Phone"]."<br>";
        
        
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

