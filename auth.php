<?php
session_start();
header('Content-Type: application/json');

// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=project_web;charset=utf8', 'root', '');

// Handle Sign Up
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'signup') {
        $email = trim($_POST['email']);
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        if (empty($email) || empty($username) || empty($password) || empty($confirm)) {
            echo json_encode(['success' => false, 'message' => 'All fields are required.']);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
            exit;
        }

        if ($password !== $confirm) {
            echo json_encode(['success' => false, 'message' => 'Passwords do not match.']);
            exit;
        }

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            echo json_encode(['success' => false, 'message' => 'Username or email already taken.']);
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $stmt->execute([$email, $username, $hashedPassword]);

        $_SESSION['user_id'] = $pdo->lastInsertId();
        echo json_encode(['success' => true, 'message' => 'Account created successfully!']);
        exit;
    }

    if ($action === 'signin') {
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo json_encode(['success' => false, 'message' => 'Username and password are required.']);
            exit;
        }

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo json_encode(['success' => true, 'message' => 'Login successful!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Wrong username or password.']);
        }
        exit;
    }
}
?>
