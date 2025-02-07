<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['username'];
    $email = $_POST['email'];
    $flatno = $_POST['flatno'];
    $mobileno = $_POST['mobno'];
    $familymem = $_POST['fammem'];
    $Password = $_POST['password'];
}

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "usersregister";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    // Submitting to database
    $sql = "INSERT INTO `registration` (`Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`, `active`) 
            VALUES ('$Username', '$email', '$flatno', '$mobileno', '$familymem', '$Password', '0')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
                alert('Registration successful...you can login after admin\'s approval.');
                window.location.href = 'login.html';
              </script>";
        exit(); 
    } else {
        echo "<script>
                alert('Registration Failed...Please try again.!!');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
}
?>
