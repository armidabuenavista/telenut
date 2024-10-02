<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    session_start();
    include 'config.php';  // database connection file

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch user details from the database
        $query = "SELECT * FROM users WHERE username = ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Store user info in session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];

                    // Redirect based on the role
                    if ($user['role'] == 'client') {
                        header('Location: client_dashboard.php');
                    } elseif ($user['role'] == 'dietitian') {
                        header('Location: dietitian_dashboard.php');
                    } elseif ($user['role'] == 'admin') {
                        header('Location: admin_dashboard.php');
                    }
                    exit();
                } else {
                    echo "<p>Invalid password. Please try again.</p>";
                }
            } else {
                echo "<p>User not found. Please check your credentials.</p>";
            }
            $stmt->close();
        }
    }

    ?>
</body>
</html>
