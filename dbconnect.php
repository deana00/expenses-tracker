<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
$DB_NAME = "expenser";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$db_selected = mysqli_select_db($conn, $DB_NAME);

if (!$db_selected) {
    $db_create = "CREATE DATABASE IF NOT EXISTS $DB_NAME";
    // $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (mysqli_query($conn, $db_create)) {
        echo "DB created succesfully";
    } else {
        echo "Error creating DB: " . mysqli_error($conn);
    }
}

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, $DB_NAME);
$table = "CREATE TABLE IF NOT EXISTS records (
    id INT(11) NOT NULL AUTO_INCREMENT,
    dates DATETIME NOT NULL,
    category VARCHAR(20) NOT NULL, 
    amount VARCHAR(11) NOT NULL, 
    PRIMARY KEY(id))";

// mysqli_query($conn, $db);
mysqli_query($conn, $table);
if (!mysqli_query($conn, $table)) {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "Database status: ";
if ($conn) {
    echo "Connected";
} else {
    echo "Not Connected";
}
