<?php
// Database connection parameters

try {
    // Create connection
    $conn =new PDO('mysql:host=localhost;dbname=project_web;charset=utf8', 'root', '');
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if POST variables are set
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        // Sanitize the inputs
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        // Insert into the contact_messages table
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);

        echo "Thank you, <strong>$name</strong>! Your message has been saved successfully.";
    } else {
        echo "Please fill out all fields.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
