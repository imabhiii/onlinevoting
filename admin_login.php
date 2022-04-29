<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Admin Login</title>
        <!--google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--fontskits-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .card {
        width: 400px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        text-align: center;
        padding: 30px;
        border: 4px #a517ba solid;
        border-radius: 5px;
    }
    </style>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.html">Let'sVote</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
<section>
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <h3>Admin Login</h3>

                    <form method="post">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="username"
                                placeholder="Please Enter your Email" value="">
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" name="password"
                                placeholder="Please Enter your Password" value="">
                        </div>
                        <div class="form-group">
                            <input required type="submit" class="btnSubmit" name="adminlogins" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php

//database connection
include('dbConnect.php');

if(isset($_POST['adminlogins'])){

$sql="SELECT * FROM `admin` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'";
$row=mysqli_query($connect,$sql);   
if(mysqli_num_rows($row)>0){
    session_start();
$_SESSION['admin_id']=$_POST['username'];
header("location:admin_dashboard.php");
}
else{
    $_SESSION['error']="Wrong User ID and password";
header("location:admin_login.php");
}}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>