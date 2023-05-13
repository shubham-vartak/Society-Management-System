<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
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
    <title>Register complaint</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>

/* .container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 90%;
	left: 0;
	top: 0; */

	/* background-size: cover; */
	/* filter: blur(50px);
	z-index: -1; */
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}



.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 180px 10px;
	margin-bottom: 45px;
  font-size: 35px;
}

/* h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #19B3D3;
} */

.field{
	width: 50%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: white;
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: #f5f5f7;
}

textarea{
	min-height: 170px;
}

.btn{
	width: 25%;
	padding: 0.5rem 1rem;
	background-color: #19B3D3;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #0B87A6;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}
    </style>
</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
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
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="Images/download.png" class="profile_image" alt="">
        <h4> <?php echo $_SESSION['username']?> </h4>
      </center>
      <a href="Welcome.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board</span></a>
      <a href="complaint.php" class="active"><i class="fas fa-envelope-open-text"></i><span>Register Complaint</span></a>
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Maintenance Payment</span></a>
      <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br>
    <div class="container">
		<div class="contact-box">
			
			<div class="right">
				<h2>Register Your Anonymous complaints</h2>
        <form action="#" method="POST">
          <input type="text" class="field" name="ctitle" placeholder="Title" required>
          <textarea placeholder=" Enter Your Compliant" name="nmsg" class="field" required></textarea><br>
          <button class="btn" name="lcomplaint">Lodge complaint</button> 
          
          <button class="btn" name="ccancel">Cancel</button>
        </form>
			</div>
		</div>
	</div>
  </div>
</body>
</html>
<?php
if(isset($_POST['lcomplaint'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"complaints");
  $query = "insert into combox values(null,'$_POST[ctitle]','$_POST[nmsg]')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script>alert('Complaint Submitted...!!');
    window.location.href = 'Welcome.php';
    </script>";
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'complaint.php';
    </script>";
  }
}
?>