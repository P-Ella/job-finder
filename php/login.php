<?php

// Establish database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=projects', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare SQL statement to check if the user exists
    $statement = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $statement->execute([$username]);
    $user = $statement->fetch();

    // Check if the user exists
    if ($user && $password) {
        // User exists and password matches
        echo "Login successful. Welcome, " . $user['username'];
        // Perform further actions here, such as setting session variables, redirecting to another page, etc.
    } else {
        // User does not exist or password does not match
        echo "Invalid username or password";
    }
}

?>
