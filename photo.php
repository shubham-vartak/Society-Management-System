<?php
session_start();


// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: login.html");
//     exit;
// }

?>
<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo add</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
    .Table_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    padding-bottom: 5px;
    margin-top: 25px;
    margin-right: 616px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Table_btn:hover{
    background: #19B3D3;
  }
.content h2{
    position: relative;
	padding: 0 180px 10px;
	margin-bottom: 45px;
  font-size: 35px;

  }
.content p{
  text-align: center;
}
.main{
  display: flex;
  
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height:55vh;
}
.alb{
  width: 200px;
  height: 200px;
  padding: 20px;
  
}
.alb img{
  width: 114%;
  height: 130%;
  
  
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
        <h4> Admin </h4>
      </center>
      <a href="managemem.php"><i class="fas fa-desktop"></i><span>Manage Members</span></a>
      <a href="addnotice.php"><i class="fas fa-bullhorn"></i><span>Add Notice</span></a>
      <a href="viewcomplaints.php" class="active"><i class="fas fa-envelope-open-text"></i><span>View Complaints</span></a>
      <a href="viewpayment.php" ><i class="fas fa-file-invoice-dollar"></i><span>View Payments</span></a>
      <a href="photo.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br> 

    <h2> Upload your Anonymous photos..!! </h2>

    <div class="main">

      <?php if (isset($_GET['error'])):?>
        <p><?php echo ($_GET['error']);?></p>
        <?php endif ?> 
        
        <form action="picadd.php" method="POST" enctype="multipart/form-data" style="padding-left: 383px;">
        <input type="file" name="my_image" >
        <input type="submit" class="Table_btn" name="upload" value="Upload" >
      </form>
      
    <?php 
      $sql = "SELECT * FROM images ORDER BY id DESC";
      $res =  mysqli_query($conn,$sql);
      
      if (mysqli_num_rows($res) > 0){
        while($images  = mysqli_fetch_assoc($res)){ ?>

<div class="alb">
  <img src="Images/<?=$images['image_url']?>" >
</div>

<?php  } }?>  


</div>
</div>
</body>
</html>

