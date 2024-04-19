<?php
include 'connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $user_lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $user_email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);

    // Check if user with the same email already exists
    $check_email_query = "SELECT * FROM users WHERE user_email=?";
    $stmt = $conn->prepare($check_email_query);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // User already exists, display error message and redirect to signup.html
        echo '<script>alert("User with this email already exists. Please try again with a different email address."); window.location.href = "signup.html";</script>';
        exit; // Stop further execution to prevent the rest of the page from loading
    }

    // Insert data into users table using prepared statement
    $insert_query = "INSERT INTO users (user_fname, user_lname, user_email, password, gender, phone_number) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("ssssss", $user_fname, $user_lname, $user_email, $hashed_password, $gender, $phone_number);
    if ($stmt->execute()) {
        // Registration successful, redirect to login.html with a success message
        echo '<script>alert("Registration successful. You can now login."); window.location.href = "login.html";</script>';
        exit; // Stop further execution to prevent the rest of the page from loading
    } else {
        // Registration failed, display error message and redirect to signup.html
        echo '<script>alert("Registration failed. Please try again later."); window.location.href = "signup.html";</script>';
        exit; // Stop further execution to prevent the rest of the page from loading
    }
}

// Close database connection
$conn->close();
?>
