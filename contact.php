<?php

session_start();
//database connection
include('dbConnect.php');

if(isset($_POST['add_contact'])){
$name=$_POST['txtName'];
$email=$_POST['txtEmail'];
$message=$_POST['txtMessage'];
$insert="INSERT into contact(txtName,txtEmail,txtMessage) values('$name','$email','$message')";
$run=$connect->query($insert);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--fontskits-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .fa-check {
        font-size: 80px;
        color: #27ae60;
        font-weight: bold;
        height: 110px;
        width: 110px;
        border: 1px solid #27ae60;
        text-align: center;
        padding-top: 13px;
        border-radius: 50%;
        box-sizing: border-box;
        margin: 40px 0 0 0px;
    }
    </style>
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.html">Let'sVote</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__li">
                        <a class="nav__a" href="index.html">Home</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="year.php">Candidate</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="login.html">Login</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="result.php">Result</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <H1 style="margin-top: 40px;">Successfully Submitted</H1>
                </div>
                <div class="col-md-12">
                    <p>Go Home Click this Link -><a href="index.html">Click Me</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer/Social media section-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <hr>
                    <div class="footer-social">
                        <ul class="d-flex list-unstyled p2 footer__social__ul">
                            <li style="list-style: none; padding: 10px; "><a href="index.html"
                                    style="text-decoration: none; color: #a517ba;"></a>Home</li>
                            <li style="list-style: none; padding: 10px; "><a href="about.php"
                                    style="text-decoration: none; color: #a517ba;"></a> About</li>
                            <li style="list-style: none; padding: 10px; "><a href="suggestion.html"
                                    style="text-decoration: none; color: #a517ba;"></a> Suggestion</li>
                            <li style="list-style: none; padding: 10px; "><a href="contact_form.php"
                                    style="text-decoration: none; color: #a517ba;"></a> Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <hr>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>