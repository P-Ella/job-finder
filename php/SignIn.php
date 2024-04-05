<?php

// Establish database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=projects', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successfully";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare SQL statement to check if the user exists
    $get_user = $con->prepare("SELECT * FROM job_seeker WHERE email = :email AND password = :password");

    // Bind parameters
    $get_user->bindParam(':email', $email);
    $get_user->bindParam(':password', $password);
    
    // Execute the prepared statement
    $get_user->execute();
    
    // Fetch the result
    $user = $get_user->fetch(PDO::FETCH_ASSOC);
    
    // Check if a user was found
    if ($user) {
        // User found, do something
        echo "$user";
    } else {
        // User not found or incorrect credentials
        echo "User not found";s
    }
    
}

?>
