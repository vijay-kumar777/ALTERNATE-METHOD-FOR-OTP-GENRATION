<?php
session_start();
require 'dbcon.php';



if(isset($_POST['delete_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{   
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $pw = mysqli_real_escape_string($con, $_POST['pw']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $phno = mysqli_real_escape_string($con, $_POST['phno']);

    $query = "UPDATE user SET name ='$name', pw ='$pw', email='$email', dob='$dob', phone='$phone', WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $pw = mysqli_real_escape_string($con, $_POST['pw']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $phno = mysqli_real_escape_string($con, $_POST['phno']);

    $query = "INSERT INTO user (name,pw,email,dob,phno) VALUES ('$name','$pw','$email','$dob','$phno')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        
        header("Location: index.html");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: user-create.php");
        exit(0);
    }
}

?>