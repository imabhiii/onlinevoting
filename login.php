<?php
session_start();
include('dbConnect.php');

$voterid=$_POST['voterid'];
$password=$_POST['password'];
$check=mysqli_query($connect,"SELECT *FROM users WHERE voterid='$voterid' AND password='$password'");
$userdata=mysqli_fetch_array($check);
if(is_array($userdata)){

// $_SESSION['userdata']=$userdata;
header("location:year.php");
$_SESSION['voterid']=$userdata['voterid'];// $dbEmail;
$_SESSION['Votes']=$userdata['Votes'];// $Votes;
$_SESSION['votes2']=$userdata['votes2'];
$_SESSION['votes3']=$userdata['votes3'];
$_SESSION['user']="$voterid";
}
else{
    echo'
    <script>
    alert("Invalid Credentials or user not found!");
    window.location="index.html";
    </script>
    ';
}
?>