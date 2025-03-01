<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Dashboard</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>
    <style>
      .far, .fas {
        color: #a7abde;
        padding-left: 15px;
        display: inline-block; /* Prevents sticky issue */
      }

      .col-div-3 .box p {
        font-size: 25px;
      }

    .image-container {
      margin-top: 40px;
      text-align: center;
      clear: both; /* Ensures this section appears below other elements */
      display: block;
    }

    .image-container h1 {
      width: 100%;
      text-align: center;
      margin-bottom: 20px;
      display: block;
    }

    .alb {
      width: 200px;
      height: 200px;
      padding: 10px;
      display: inline-block;
      vertical-align: top;
    }

    .alb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

  </style>
</head>
<body>

<input type="checkbox" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Society<span>HUB</span></h3>
    </div>
    <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
    </div>
</header>

<div class="sidebar">
    <center>
        <img src="Images/download.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['username'] ?></h4>
    </center>
    <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board</span></a>
    <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Register Complaint</span></a>
    <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Maintenance Payment</span></a>
</div>

<div class="content">
    <h1>Welcome to Dashboard</h1>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "usersregister");

    $user_name = $_SESSION['username'];
    $sql = "SELECT Username, Flatno FROM registration WHERE Username='$user_name'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-div-3">
                    <div class="box">
                        <p>' . $row['Username'] . '<br><span>Your Username</span></p>
                        <i class="far fa-user fa-2x"></i>
                    </div>
                  </div>
                  <div class="col-div-3">
                    <div class="box">
                        <p>' . $row['Flatno'] . '<br><span>Your Flat No.</span></p>
                        <i class="fas fa-home fa-2x"></i>
                    </div>
                  </div>
                  <div class="col-div-3">
                    <div class="box">
                        <p>Shubham Vartak<br><span>Society Secretary</span></p>
                        <i class="fas fa-user-tie fa-2x"></i>
                    </div>
                  </div>';
        }
    } else {
        echo "<p>No records found!</p>";
    }
    ?>

    <!-- New Row for Images -->
    <div class="image-container">
        <h1>Images of Society</h1>
        <?php
        $conns = mysqli_connect("localhost", "root", "", "userimage");

        if (!$conns) {
            echo "Connection failed!";
            exit();
        }

        $sqli = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conns, $sqli);

        if (!$res) {
            die("Query Failed: " . mysqli_error($conns));
        }

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>
                <div class="alb">
                    <img src="Images/<?= $images['image_url'] ?>" alt="Society Image">
                </div>
        <?php } 
        } else {
            echo "<p>No images available.</p>";
        }
        ?>
    </div>

</div>
</body>
</html>
