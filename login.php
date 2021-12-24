<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Username = $_POST['username'];
    $email = $_POST['email'];
    $flatno = $_POST['flatno'];
    $Password = $_POST['password'];
}
// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "usersregister";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successfull

$sql = "Select * from registration where username='$Username' AND flatno='$flatno'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    echo "<script>alert('Welcome,You are logged in...!');
    window.location.href = 'Welcome.php';
    </script>";
    session_start();
    $_SESSION['loggedin']= true;
    $_SESSION['username']= $Username;
}
else{
    echo "<script>alert('Sorry,Invalid credentials...!');
    window.location.href = 'login.html';
    </script>"; mysqli_error($conn);
}
?>
