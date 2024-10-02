
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Dashboard</title>
</head>
<body>
    <h2>Welcome, Client</h2>
    <p>Your Consultation History:</p>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Dietitian</th>
            <th>Notes</th>
        </tr>
        <?php foreach ($consultations as $consultation): ?>
        <tr>
            <td><?php echo htmlspecialchars($consultation['date']); ?></td>
            <td><?php echo htmlspecialchars($consultation['dietitian_name']); ?></td>
            <td><?php echo htmlspecialchars($consultation['notes']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <a href="upload_documents.php">Upload Medical Documents</a>
    <a href="schedule_appointment.php">Book Appointment</a>
    <a href="download_resources.php">Download Resources</a>
    <a href="logout.php">Logout</a>
</body>
</html>
