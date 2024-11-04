<?php
session_start();
require_once('config.php');
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="usersStyle.css">

</head>
<body>
    <div class="header">
        <h1>Dashboard Overview</h1>
        <div class="name-container">
            <p id="firstName">
                <?php
                    echo isset($_COOKIE['firstName']) ? htmlspecialchars($_COOKIE['firstName']) : 'FirstName';
                ?>
            </p>
            <p id="lastName">
                <?php
                    echo isset($_COOKIE['lastName']) ? htmlspecialchars($_COOKIE['lastName']) : 'LastName';
                ?>
            </p>
        </div> 
        <div class="logout-container">
            <button id="logoutButton" onclick="window.location.href='LogOut.php'">Logout</button>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="sidebar">
        <ul>
            <li><a href="Home.php" class="nav-link">Dashboard</a></li>
            <li><a href="#" class="nav-link">Class</a></li>
            <li><a href="#" class="nav-link">Schedule</a></li>
            <li><a href="#" class="nav-link">Teacher</a></li>
            <li><a href="users.php" class="nav-link">User</a></li>
            <li><a href="#" class="nav-link">Maintenance</a></li>
        </ul>
    </div>
    <br>
    <div class="main">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h2 class="display-6 text-center">Users</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr class="bg-dark text-white">
                                        <td>User ID</td>
                                        <td>Username</td>
                                        <td>email</td>
                                        <td>password</td>
                                        <td>Last Name</td>
                                        <td>First Name</td>
                                        <td>Middle Name </td>
                                        <td>Birthday</td>
                                        <td>Address</td>
                                        <td>Mobile</td>
                                        <td>Last Log In</td>
                                        <td>Date Created </td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <td> <?php echo $row['id'] ?> </td>
                                        <td> <?php echo $row['username'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td> <?php echo $row['password'] ?> </td>
                                        <td> <?php echo $row['lastName'] ?> </td>
                                        <td> <?php echo $row['firstName'] ?> </td>
                                        <td> <?php echo $row['middleName'] ?> </td>
                                        <td> <?php echo $row['birthday'] ?> </td>
                                        <td> <?php echo $row['address'] ?> </td>
                                        <td> <?php echo $row['mobile'] ?> </td>
                                        <td> <?php echo $row['lastLogIn'] ?> </td>
                                        <td> <?php echo $row['dateCreated'] ?> </td>
                                        <td> <a href="#" class="btn btn-primary">edit</a> </td>
                                        <td> <a href="#" class="btn btn-danger">delete</a> </td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="footer">
        
    </div>

    <script>
        // JavaScript to add 'active' class to clicked navigation link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                navLinks.forEach(nav => nav.classList.remove('active'));
                // Add 'active' class to the clicked link
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
