
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule Appointment</title>
</head>
<body>
    <h2>Schedule an Appointment</h2>

    <?php
    // Display error message if any
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>

    <form method="POST" action="submit_appointment.php">
        <h3>Select 3 Preferred Dates:</h3>
        <label for="date1">Date 1:</label>
        <input type="date" name="preferred_dates[]" required>
        <br>
        <label for="date2">Date 2:</label>
        <input type="date" name="preferred_dates[]" required>
        <br>
        <label for="date3">Date 3:</label>
        <input type="date" name="preferred_dates[]" required>
        <br>
        <input type="checkbox" name="data_privacy_agreement" required>
        <label for="data_privacy_agreement">I agree to the data privacy policy.</label>
        <br>
        <button type="submit">Continue</button>
    </form>
</body>
</html>
