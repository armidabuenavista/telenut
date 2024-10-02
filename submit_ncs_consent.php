<?php
session_start();
include 'config.php';

// Prepare SQL statement for inserting client information
$stmt = $db->prepare("INSERT INTO clients (client_name, sex, age, dob, civil_status, citizenship, occupation, sector, email, contact_number, address, educational_attainment, related_medical_conditions, physical_activity_level, height, weight, waist_circumference, hip_circumference, diet_history, medications, nutrition_goals) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->execute([
    $_POST['client_name'],
    $_POST['sex'],
    $_POST['age'],
    $_POST['dob'],
    $_POST['civil_status'],
    $_POST['citizenship'],
    $_POST['occupation'],
    $_POST['sector'],
    $_POST['email'],
    $_POST['contact_number'],
    $_POST['address'],
    $_POST['educational_attainment'],
    $_POST['related_medical_conditions'],
    $_POST['physical_activity_level'],
    $_POST['height'],
    $_POST['weight'],
    $_POST['waist_circumference'],
    $_POST['hip_circumference'],
    $_POST['diet_history'],
    $_POST['medications'],
    $_POST['nutrition_goals']
]);

// Handle the 24-hour recall data
$meal_count = count($_POST['meal_time']); // Number of meals recorded
for ($i = 0; $i < $meal_count; $i++) {
    $recall_stmt = $db->prepare("INSERT INTO food_recall (client_id, meal_time, meal_type, food_description, amount, cooking_method, brand) VALUES (?, ?, ?, ?, ?, ?, ?)");
    // You may need to retrieve the last inserted client ID if you have an auto-incrementing primary key
    $client_id = $db->lastInsertId();
    $recall_stmt->execute([
        $client_id,
        $_POST['meal_time'][$i],
        $_POST['meal_type'][$i],
        $_POST['food_description'][$i],
        $_POST['amount'][$i],
        $_POST['cooking_method'][$i] ?? null, // optional field
        $_POST['brand'][$i] ?? null // optional field
    ]);
}

// Redirect to a confirmation page or show success message
header("Location: confirmation.php"); // Adjust this to your needs
exit();
?>
