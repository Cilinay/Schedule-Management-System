<?php
// Get `id` from the query string
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id === null) {
    die("Error: ID not provided.");
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "managementsystem";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve user details by `id`
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);
if (!$user) {
    die("User not found.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card cardBack">
                    <div class="card-body">
                        <h3 class="text-center mb-4 font">Edit User Information</h3>
                        <form method="POST" action="updateForm.php">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                            <div class="input-group mb-3">
                                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($user['username']); ?>" placeholder="Username" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
