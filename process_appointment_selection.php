<?php
session_start();
include 'config.php';

// Retrieve the selected date and client ID from the POST request
$selected_date = $_POST['selected_date'];
$client_id = $_POST['client_id'];

// Update the appointment in the database
$stmt = $conn->prepare("UPDATE appointments SET confirmed_date = ? WHERE client_id = ?");
$stmt->execute([$selected_date, $client_id]);

// Optionally, you can delete or mark the other dates as unavailable
// For example, you can set preferred_date1 and preferred_date2 to NULL if they are no longer needed
$stmt = $conn->prepare("UPDATE appointments SET preferred_date1 = NULL, preferred_date2 = NULL WHERE client_id = ?");
$stmt->execute([$client_id]);

// Redirect back to the dietitian dashboard or confirmation page
header("Location: dietitian_dashboard.php"); // Adjust this to your dashboard page
exit();
?>
