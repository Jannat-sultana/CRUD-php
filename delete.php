<?php

include 'connect.php';

// ID of student to delete
$id = 1;

// SQL query to delete data
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "Student record deleted successfully<br>";
        echo "Deleted student with ID: $id";
    } else {
        echo "No record found with ID: $id";
    }
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>