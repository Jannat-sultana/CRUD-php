<?php

include 'connect.php';

// Sample data to insert
$name = "John Doe";
$email = "john@email.com";
$age = 25;
$city = "New York";

// SQL query to insert data
$sql = "INSERT INTO students (name, email, age, city) 
        VALUES ('$name', '$email', $age, '$city')";

/*
if ($conn->query($sql) === TRUE) {
    echo "New student record created successfully<br>";
    echo "Student Name: $name<br>";
    echo "Email: $email<br>";
    echo "Age: $age<br>";
    echo "City: $city<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

$conn->close();
?>