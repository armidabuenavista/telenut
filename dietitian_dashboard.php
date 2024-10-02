<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'dietitian') {
    header('Location: login.php');
    exit();
}

// Database connection
require 'config.php';

// Fetching appointments for the logged-in dietitian
$dietitian_id = $_SESSION['dietitian_id'];
$appointments = $db->prepare("SELECT * FROM appointments WHERE dietitian_id = ?");
$appointments->execute([$dietitian_id]);
$appointments = $appointments->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dietitian Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dietitian Dashboard</h1>

    <h2>Your Appointments</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Client ID</th>
            <th>Selected Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?php echo $appointment['id']; ?></td>
            <td><?php echo $appointment['client_id']; ?></td>
            <td><?php echo $appointment['selected_date']; ?></td>
            <td><?php echo $appointment['status']; ?></td>
            <td><a href="create_care_plan.php?appointment_id=<?php echo $appointment['id']; ?>">Create Care Plan</a></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="logout.php">Logout</a>
</body>
</html>
