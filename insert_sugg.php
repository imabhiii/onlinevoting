<?php
session_start();
//database connection
include('dbConnect.php');

if(isset($_POST['add_suggestion'])){
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$Suggestion =  $_POST['txtSuggestion'];
$insert="INSERT INTO `suggestion`(`name`, `email`, `number`, `suggestion`) VALUES ('$name','$email','$number','$Suggestion')";
    $run=mysqli_query($connect,$insert);   
    if($run){
        header("location:pending.php");        
    }
}
?>