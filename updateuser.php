<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateuser</title>
    <style>
        .Add_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    /* float: right; */
    margin-top: -1px;
    margin-right: 2px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Add_btn:hover{
    background: #19B3D3;
  }
  .container{
    background:#b7f7d7;
    width: 550px;
    height: 320px;
    margin-top: 90px;
    margin-left: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    /* margin: auto; */
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}
.container form{
    max-width: 400px;
    padding: 0 70px;
    position: absolute;
    top: 100px;
    transition: transform 1s;
}
form input{
    width: 100%;
    height: 40px;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 0 10px;
    border: 1px solid #ccc;
}
  
  
    </style>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'usersregister');

    $Id = $_POST['Id'];

    $query = "SELECT * FROM registration WHERE Id='$Id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    <div class="container">
        <h1>Update Member</h1>
        <form action="" method="POST" >
            <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
            <input type="text" placeholder="Username" name="username" value="<?php echo $row['Username'] ?>" required>
            <input type="email" placeholder="E-mail" name="email" value="<?php echo $row['Email'] ?>" required>
            <input type="text" placeholder="Flat-No." name="flatno" value="<?php echo $row['Flatno'] ?>" required>
            <input type="tel" placeholder="Mobile Number" name="mobno" value="<?php echo $row['MobileNo'] ?>" required>
            <button type="submit" name="update" class="Add_btn" >Update data</button>
        </form>
        <?php
            if(isset($_POST['update']))
            {
                $Username = $_POST['username'];
                $email = $_POST['email'];
                $flatno = $_POST['flatno'];
                $mobileno = $_POST['mobno'];
                $familymem = $_POST['fammem'];

                $query = "UPDATE registration SET Username = '$Username', Email = '$email',Flatno='$flatno', MobileNo='$mobileno' WHERE Id='$Id'";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo "<script>alert('Updated Successfully..!!');
                    window.location.href = 'managemem.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Not updated...Please try again.!!');
                    window.location.href = 'updateuser.php';
                    </script>";
                }
            }

        ?>
    </div>

            <?php
        }
    }
    else
    {
        echo'<script> alert("No Record Found"); </script>';
    }
    ?>
    
</body>
</html>