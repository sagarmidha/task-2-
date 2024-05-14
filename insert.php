<?php
$host = "localhost";
$dbusername = "your_username";
$dbpassword = "your_password";
$dbname = "project";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('Connect Error(' . $conn->connect_errno . ') ' . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $familiar = isset($_POST['familiar']) ? $_POST['familiar'] : '';
    $why = isset($_POST['why']) ? $_POST['why'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $recommend = isset($_POST['user-recommend']) ? $_POST['user-recommend'] : '';
    $mostlike = isset($_POST['mostlike']) ? $_POST['mostlike'] : '';
    $prefer = isset($_POST['prefer']) ? $_POST['prefer'] : '';
    $text = isset($_POST['text']) ? $_POST['text'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    $stmt = $conn->prepare("INSERT INTO fee project (name, email, familiar, why, role, recommend, mostlike, prefer, text, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

