<?php

include('dbConnect.php');

if(isset($_GET['status'])){
   echo $sql="UPDATE `candidates` SET `approve_status`='$_GET[status]' WHERE `id`='$_GET[id]'";
    // $sql = "update candidates set approve_status= $status where id=$id";
    $result=mysqli_query($connect,$sql);
    if($result){
    header("location:user_cand.php");
    }
    
}
?>