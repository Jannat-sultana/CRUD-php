<?php

include 'connect.php';

// SQL query to select all data
$sql = "SELECT id, name, email, age, city FROM students";
$result = $conn->query($sql);

/*
if ($result->num_rows > 0) {
    echo "<h2>All Students</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>City</th></tr>";
    
    // Display each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No students found in database";
}
*/

$conn->close();
?>