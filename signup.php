<?php


    include('dbh.inc.php');
    // if(isset($_POST["submit"])){//submit and name都可以
    if(isset($_POST["submit"])){
    $first=$_POST["first"];
    $last=$_POST["last"];
    $email=$_POST["email"];
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];

    $sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last', '$email', 
    '$uid','$pwd');";

    //Execute query

    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        header("Location:about.php?signup=success");
    }
    else{
        echo 'query error' . mysqli_error($conn);
    }
}