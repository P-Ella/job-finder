<?php

try {
    // Define constants for connection parameters
    define("HOST", "localhost");
    define("DBNAME", "projects");
    define("USER", "root");
    define("PASS", "");

    // Establish a connection using PDO
    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME;
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    $con = new PDO($dsn, USER, PASS, $options);

    echo 'Connection successful';
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}

?>
