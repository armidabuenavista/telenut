<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Database connection
require 'config.php';

// Fetching appointments and feedbacks for display
$appointments = $db->query("SELECT * FROM appointments")->fetchAll(PDO::FETCH_ASSOC);
$feedbacks = $db->query("SELECT * FROM feedback")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    
    <h2>Appointments</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Client ID</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?php echo $appointment['id']; ?></td>
            <td><?php echo $appointment['client_id']; ?></td>
            <td><?php echo $appointment['selected_date']; ?></td>
            <td><?php echo $appointment['status']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Feedback</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Client ID</th>
            <th>Feedback</th>
            <th>Submitted At</th>
        </tr>
        <?php foreach ($feedbacks as $feedback): ?>
        <tr>
            <td><?php echo $feedback['id']; ?></td>
            <td><?php echo $feedback['client_id']; ?></td>
            <td><?php echo $feedback['feedback_text']; ?></td>
            <td><?php echo $feedback['submitted_at']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <a href="logout.php">Logout</a>
</body>
</html>
