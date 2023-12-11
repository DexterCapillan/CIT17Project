<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>StudentRecord</title>
</head>
<body>
    <header>
        <h1>Welcome to Student Record System</h1>
    </header>

    <ul class="navigation-bar">
        <li><a href="StudentRecord.php">StudentRecord</a></li>
        <li><a href="CourseRecord.php">Course</a></li>
        <li><a href="InstructorRecord.php">Instructor</a></li>
        <li><a href="EnrollmentRecord.php">Enrollment</a></li>
    </ul>

    <div class="container">
        <h1>Add Student Record</h1>
        <!-- Your form and PHP code for adding student record go here -->

        <h1>Students Records</h1>
        <table style="width:100%">
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php
            echo "<br><hr>";
            // Example query
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result) {
                // Process the results;
                while ($row = $result->fetch_assoc()) {
                    // Inside the while loop for displaying records
                    echo "<tr>
                            <td>" . $row["StudentID"] . "</td>
                            <td>" . $row["FirstName"]. "</td>
                            <td>" . $row["LastName"]. "</td>
                            <td>" . $row["DateOfBirth"]. "</td>
                            <td>" . $row["Email"]. "</td>
                            <td>" . $row["Phone"]. "</td>
                          </tr>";
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            ?>
        </table>
    </div>
</body>
</html>
