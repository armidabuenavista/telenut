<?php
session_start();
// Ensure the client is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'client') {
    header('Location: login.php');
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form data
    // Here you would typically insert this data into your database

    // Redirect after processing
    header('Location: thank_you.php'); // Redirect to a thank you page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOST-FNRI Nutrition Counseling Services</title>
</head>
<body>
    <h1>DOST-FNRI Nutrition Counseling Services</h1>
    <form method="POST" enctype="multipart/form-data">
        <h2>Nutrition Counseling Service (NCS) Consent Form</h2>
        <p>I voluntarily agree to avail the nutrition counseling service of the DOST-FNRI...</p>
        <label>
            <input type="checkbox" name="ncs_agreement" required>
            I have fully read, understood, and agree with the NCS' terms and policies.
        </label>
        <br><br>

        <h2>Client Data Sheet</h2>
        <label for="full_name">Client's Full Name (Last Name, First Name, Middle Initial) *</label>
        <input type="text" name="full_name" required>
        <br>

        <label for="sex">Sex *</label>
        <select name="sex" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>

        <label for="dob">Date of Birth *</label>
        <input type="date" name="dob" required>
        <br>

        <label for="civil_status">Civil Status *</label>
        <select name="civil_status" required>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Living Together">Living Together</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
        </select>
        <br>

        <label for="citizenship">Citizenship *</label>
        <input type="text" name="citizenship" required>
        <br>

        <label for="occupation">Occupation *</label>
        <input type="text" name="occupation" required>
        <br>

        <label for="sector">Sector *</label>
        <select name="sector" required>
            <option value="General Public">General Public</option>
            <option value="Government">Government</option>
            <option value="Non-Government Organizations">Non-Government Organizations</option>
            <option value="Private Institution">Private Institution</option>
        </select>
        <br>

        <label for="email">Email Address *</label>
        <input type="email" name="email" required>
        <br>

        <label for="contact_number">Contact Number *</label>
        <input type="text" name="contact_number" required>
        <br>

        <label for="address">Address</label>
        <textarea name="address"></textarea>
        <br>

        <label for="education">Educational Attainment *</label>
        <select name="education" required>
            <option value="Elementary">Elementary</option>
            <option value="High School">High School</option>
            <option value="College">College</option>
            <option value="MS/PhD">MS/PhD</option>
        </select>
        <br>

        <label for="medical_conditions">Related Medical Conditions *</label>
        <select name="medical_conditions[]" multiple required>
            <option value="Endocrine">Endocrine (Diabetes, Thyroid Disease, Hormonal Problems)</option>
            <option value="Neurological">Neurological (Stroke, Nerve and Muscle)</option>
            <option value="Renal">Renal/Kidney</option>
            <option value="Liver">Liver</option>
            <option value="Heart">Heart</option>
        </select>
        <br>

        <label for="physical_activity">Physical Activity Level *</label>
        <select name="physical_activity" required>
            <option value="Sedentary">Sedentary</option>
            <option value="Light">Light</option>
            <option value="Moderate">Moderate</option>
            <option value="Very Active">Very Active</option>
        </select>
        <br>

        <h2>Self-declared Anthropometric Data</h2>
        <label for="height">Height *</label>
        <input type="text" name="height" required>
        <br>

        <label for="weight">Weight *</label>
        <input type="text" name="weight" required>
        <br>

        <label for="waist_circumference">Waist Circumference (If available)</label>
        <input type="text" name="waist_circumference">
        <br>

        <label for="body_fat">Body Fat Percentage (If available)</label>
        <input type="text" name="body_fat">
        <br>

        <label for="bp">Blood Pressure (If available)</label>
        <input type="text" name="bp">
        <br>

        <h2>Document Uploads</h2>
        <label for="food_intake_form">Food Intake Form</label>
        <input type="file" name="food_intake_form" accept=".pdf,.doc,.docx" required>
        <br>

        <label for="biochemical_results">Biochemical Test Results (Optional)</label>
        <input type="file" name="biochemical_results" accept=".pdf,.doc,.docx">
        <br>

        <h2>Preferred Date and Time of Nutrition Counseling</h2>
        <label for="preferred_date">Preferred Date *</label>
        <input type="date" name="preferred_date" required>
        <br>

        <label for="preferred_time">Preferred Time *</label>
        <input type="time" name="preferred_time" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
