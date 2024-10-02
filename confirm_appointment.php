<?php
session_start();
include 'config.php';

// Check if the user is logged in as a dietitian
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'dietitian') {
    header('Location: login.php');
    exit();
}

// Handle the confirmation of appointment
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $consultation_id = $_POST['consultation_id'];
    $selected_date = $_POST['selected_date'];

    // Update the consultation with the selected date and assign the dietitian
    try {
        $stmt = $conn->prepare("UPDATE consultations 
                                  SET appointment_date = :selected_date, 
                                      dietitian_id = :dietitian_id 
                                  WHERE id = :consultation_id");
        $stmt->execute([
            ':selected_date' => $selected_date,
            ':dietitian_id' => $_SESSION['user_id'],
            ':consultation_id' => $consultation_id
        ]);

        echo "Appointment confirmed successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header('Location: dietitian_dashboard.php'); // Redirect if accessed improperly
    exit();
}
?>
