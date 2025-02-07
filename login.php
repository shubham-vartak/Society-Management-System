<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['username'];
    $flatno = $_POST['flatno'];
    $Password = $_POST['password'];
}

// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "usersregister";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Checking if user exists and is active
$sql = "SELECT * FROM registration WHERE username='$Username' AND flatno='$flatno'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $row = mysqli_fetch_assoc($result);

    if ($row['active'] == 1) { // Only allow login if active = 1
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $Username;

        echo "<script>
                alert('Welcome, You are logged in...!');
                window.location.href = 'Welcome.php';
              </script>";
        exit();
    } else { // If active = 0, show message
        echo "<script>
                alert('Your account is pending admin approval.');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
} else {
    echo "<script>
            alert('Sorry, Invalid credentials...!');
            window.location.href = 'login.html';
          </script>";
    exit();
}
?>
