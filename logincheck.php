<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
    echo "conenction successful";
}else{
    echo "no connection";
}

$db = mysqli_select_db($con, 'maxmovies');

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = " select * from login where username='$username' and password='$password' ";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1){
            echo "login successful";
            $_SESSION['user'] = $username;
            header('location:admin/blog-admin.php');
        }else{
            echo "login failed";
            header('location:login.php');
        }

}


?>