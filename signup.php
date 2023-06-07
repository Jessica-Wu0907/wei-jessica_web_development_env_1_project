<?php


    include('dbh.inc.php');
    if(isset($_POST['submit'])){
    $first=$_Post["first"];
    $last=$_Post["last"];
    $email=$_Post["email"];
    $uid=$_Post["uid"];
    $pwd=$_Post["pwd"];

    $sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last', '$email', 
    '$uid','$pwd');";

    //Execute query

    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        header("Location:index.php?signup=success");
    }
    else{
        echo 'query error' . mysqli_error($conn);
    }
}