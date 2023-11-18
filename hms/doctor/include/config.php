<?php
use mysqli;

const DB_SERVER = 'nefrohelpmysql.cqdq1asuezdv.us-east-1.rds.amazonaws.com';
const DB_USER = 'admin';
const DB_PASS = 'admin123';
const DB_NAME = 'hms';

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, 3306);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit(); // Add this line to stop script execution on connection failure
}