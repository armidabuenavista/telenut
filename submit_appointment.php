<?php
session_start();
include 'config.php'; // Include the database configuration

// Validate that the form is submitted and all fields are filled in
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Check if data privacy agreement is accepted
    if (!isset($_POST['data_privacy_agreement'])) {
        $error_message = "You must agree to the data privacy policy to proceed.";
        header("Location: schedule_appointment.php");
        exit();
    }

    // Validate the preferred dates and time
    if (empty($_POST['preferred_dates']) || count($_POST['preferred_dates']) < 3 || empty($_POST['preferred_time'])) {
        $error_message = "Please select three preferred dates and a time.";
        header("Location: schedule_appointment.php");
        exit();
    }

    // Collect the form data
    $client_name = $_SESSION['client_name']; // Assuming client_name is stored in the session during login
    $email = $_SESSION['client_email']; // Assuming email is stored in the session during login
    $preferred_date1 = $_POST['preferred_dates'][0];
    $preferred_date2 = $_POST['preferred_dates'][1];
    $preferred_date3 = $_POST['preferred_dates'][2];
    $preferred_time = $_POST['preferred_time'];

    try {
        // Prepare SQL statement to insert the appointment into the database
        $stmt = $conn->prepare("
            INSERT INTO appointments 
            (client_name, email, preferred_date1, preferred_date2, preferred_date3, preferred_time) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        // Execute the query with the provided data
        $stmt->execute([
            $client_name,
            $email,
            $preferred_date1,
            $preferred_date2,
            $preferred_date3,
            $preferred_time
        ]);

        // Optionally send a confirmation email to the client
        /*
        $to = $email; 
        $subject = "Appointment Scheduled";
        $message = "Dear " . $client_name . ",\n\nYour appointment has been successfully scheduled. We will confirm the exact date soon.\n\nThank you,\nSupport Team";
        $headers = "From: your-email@example.com";

        mail($to, $subject, $message, $headers);
        */

        // Optionally send a notification email to the RND (Registered Nutritionist-Dietitian)
        /*
        $rnd_email = "rnd@example.com"; 
        $rnd_subject = "New Appointment Request";
        $rnd_message = "A new appointment has been requested by " . $client_name . ".\n\nPreferred Dates: " . implode(", ", $_POST['preferred_dates']) . "\nPreferred Time: " . $preferred_time;
        $rnd_headers = "From: your-email@example.com";

        mail($rnd_email, $rnd_subject, $rnd_message, $rnd_headers);
        */

        // Redirect to confirmation page or display a success message
        header("Location: appointment_confirmation.php"); 
        exit();
        
    } catch (PDOException $e) {
        // Log the error for debugging
        error_log("Database error: " . $e->getMessage());
        $error_message = "There was an error scheduling your appointment. Please try again later.";
        header("Location: schedule_appointment.php");
        exit();
    }
} else {
    // If the form was not submitted, redirect back to the form page
    header("Location: schedule_appointment.php");
    exit();
}
?>
