<?php
$database_path = 'telenut.db';
$dsn = "sqlite:" . $database_path;

try {
    $conn = new PDO($dsn);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    error_log("Connection failed: " . $e->getMessage()); // Log the error
    header("Location: error.php");
    exit();
}
