<?php
// Check if consent is given
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Redirect to medical history form
    if ($_POST['consent'] === 'yes') {
        header('Location: client_form.php');
        exit;
    } else {
        echo "You must agree to the data privacy policy to proceed.";
    }
}
?>

<form method="POST" action="">
    <label for="consent">Do you agree to our data privacy policy?</label>
    <input type="radio" name="consent" value="yes" required> Yes
    <input type="radio" name="consent" value="no" required> No
    <button type="submit">Submit</button>
</form>
