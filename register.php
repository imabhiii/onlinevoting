<?php
include('dbConnect.php');
// Form Data Received
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$voterid=$_POST['voterid'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$tmp_size=$_FILES['photo']['tmp_size'];
$tmp_typee=$_FILES['photo']['tmp_type'];
$image1=$_FILES['citizenfront']['name'];
$tmp_names=$_FILES['citizenfront']['tmp_name'];
$tmp_sizes=$_FILES['citizenfront']['tmp_size'];
$tmp_typees=$_FILES['citizenfront']['tmp_type'];
$image2=$_FILES['citizenback']['name'];
$tmp_names=$_FILES['citizenback']['tmp_name'];
$tmp_sizes=$_FILES['citizenback']['tmp_size'];
$tmp_typees=$_FILES['citizenback']['tmp_type'];
if($password==$cpassword){
    move_uploaded_file($tmp_name,"img/".$image);
    move_uploaded_file($tmp_name,"img/".$image1);
    move_uploaded_file($tmp_name,"img/".$image2);
    // move_uploaded_file($tmp_name,"../img/$image");
    $insert=mysqli_query($connect,"INSERT INTO users(name,mobile,password,address,dob,voterid,photo,citizenfront,citizenback,status,Votes,votes2,votes3) VALUES('$name','$mobile','$password','$address','$dob','$voterid','$image','$image1','$image2','OFF','NO','NO','NO')");
if($insert){
    echo'
    <script>
    alert("Registration successfull !!!");
    window.location="login.html";
    </script>
    ';
}
else{
        echo'
    <script>
    alert("Some error occured!");
    window.location="register.html";
    </script>
    ';
}
}
else{
    echo'
    <script>
    alert("Password and confirm password does not match!");
    window.location="register.html";
    </script>
    ';
    
}
?>