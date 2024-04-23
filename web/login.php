<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once('connect.php');

    // Validate and sanitize input data
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session and redirect to terms.html
            $_SESSION['email'] = $email;
            $_SESSION['user_fname'] = $row['user_fname'];
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            // Incorrect password, display alert
            echo '<script>alert("Invalid email or password");</script>';
        }
    } else {
        // User not found, display alert
        echo '<script>alert("Invalid email or password");</script>';
    }
    
    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to login page if accessed directly
    header("Location: login_page.php");
    exit();
}
?>


