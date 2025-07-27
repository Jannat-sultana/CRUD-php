<?php

include 'connect.php';

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    city VARCHAR(50) NOT NULL
)";

/*

if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully";
} else {
    echo "Error creating table";
}
*/

?>
