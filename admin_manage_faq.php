<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $category = $_POST['category'];

    $query = "INSERT INTO faq (question, answer, category) VALUES ('$question', '$answer', '$category')";
    if (mysqli_query($conn, $query)) {
        echo "FAQ added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
