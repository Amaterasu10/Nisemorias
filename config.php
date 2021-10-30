<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nisimorias";
$tables = array('Users', 'images');
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE $dbname";

//check if the database is successfully created
if ($conn->query($sql) === TRUE) {
    
    // if it is, connect to that database
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    echo " Database initialized successfully <br>";

    // and create a new table for that database
    $sql = "CREATE TABLE $tables[0] (
        username VARCHAR(30) NOT NULL,
        pass VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    //check if the table is successfully created
    if ($conn->query($sql) === TRUE) {
        echo " Table initialized successfully <br>";
    } else {
        if($conn->error === "Table 'users' already exists"){/*Do nothing */}
        else exit(" Error creating table: $conn->error");
    }
} 
else {
    if($conn->error === "Can't create database '$dbname'; database exists"){/*Do nothing */}
    else exit(" Error creating databdase: $conn->error");
}
echo "Connected successfully <br>";

$conn->close();

// function checkDB_if_exist($conn){

// };

?>