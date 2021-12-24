<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Username = $_POST['username'];
    $email = $_POST['email'];
    $flatno = $_POST['flatno'];
    $mobileno = $_POST['mobno'];
    $familymem = $_POST['fammem'];
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

if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    // submitting to database
    
    $sql = "INSERT INTO `registration` ( `Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`) VALUES ( '$Username', '$email', '$flatno', '$mobileno', '$familymem', '$Password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Registration successfull...you may now login.');
        window.location.href = 'login.html';
        </script>";
    }
    else{
        echo "<script>alert('Registration Failed...Please try again.!!');
        window.location.href = 'login.html';
        </script>";

    }
}
?>
