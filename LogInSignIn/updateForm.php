<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "managementsystem";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Retrieve form data
$id = $_POST['id'];
$userName = $_POST['username'];
$email = $_POST['username'];
$password = base64_encode($_POST['password']);
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

// Update query with `id` to identify the correct user
$sql = "UPDATE `users` SET 
            `username` = '$userName', 
            `email` = '$email', 
            `password` = '$password', 
            `lastName` = '$lastName', 
            `firstName` = '$firstName', 
            `middleName` = '$middleName', 
            `birthday` = '$birthday', 
            `address` = '$address', 
            `mobile` = '$mobile'
        WHERE `id` = $id";

if (mysqli_query($conn, $sql)) {
    header('Location: LogIn.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
