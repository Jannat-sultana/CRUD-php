<?php

include 'connect.php';

// Data to update (assuming we want to update student with ID = 1)
$id = 1;
$new_name = "John Smith";
$new_email = "johnsmith@email.com";
$new_age = 26;
$new_city = "Los Angeles";

// SQL query to update data
$sql = "UPDATE students SET 
        name='$new_name', 
        email='$new_email', 
        age=$new_age, 
        city='$new_city' 
        WHERE id=$id";
/*
if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "Student record updated successfully<br>";
        echo "Updated ID: $id<br>";
        echo "New Name: $new_name<br>";
        echo "New Email: $new_email<br>";
        echo "New Age: $new_age<br>";
        echo "New City: $new_city<br>";
    } else {
        echo "No record found with ID: $id";
    }
} else {
    echo "Error updating record: " . $conn->error;
}
*/
$conn->close();
?>