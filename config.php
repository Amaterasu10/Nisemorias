<?php
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
        id int NOT NULL AUTO_INCREMENT,
        uname VARCHAR(50) NOT NULL,
        pass VARCHAR(50) NOT NULL,
        primary key(id)
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

// $conn = new mysqli($servername, $username, $password, $dbname);

// $sql = "INSERT INTO $tables[0] (uname, pass)
// VALUES ('admin',123)";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->close();

function register_user($conn, $sql, $uname, $pass){
    $sql = "INSERT INTO Users (uname, pass)
    VALUES ('$uname', $pass)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
};
?>