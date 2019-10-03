<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// $sql = "CREATE DATABASE employee";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
//sql to create table
// $sql = "CREATE TABLE Employeedetails (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     employee_name VARCHAR(50) NOT NULL,
//     home_Address VARCHAR(50) NOT NULL,
//     state_origin VARCHAR(30),
//     age INT(6),
//     phone_no VARCHAR(30)
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table Employess created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
    function insert  ($employee_name, $home_Address, $state_origin, $age, $phone_no, $id, $conn){
                $sql = "INSERT INTO  Employeedetails (employee_name, home_Address, state_origin, age, phone_no, id, conn)
                VALUES ($employee_name, $home_Address, $state_origin, $age, $phone_no, $id, $conn)";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        }else {
            echo "Error updating record: " . $conn->error;
        }
    }