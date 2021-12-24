<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'usersregister');

    if(isset($_POST['delete']))
    {
        $Id = $_POST['Id'];

        $query = "DELETE FROM registration WHERE Id='$Id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo "<script>alert('Data Deleted Successfully..!!');
             window.location.href = 'managemem.php';
            </script>";

        }
        else
        {
            echo "<script>alert('Data not deleted,please try again..!!');
            window.location.href = 'deleteuser.php';
            </script>";
        }

    }
?>



