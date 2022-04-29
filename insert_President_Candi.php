<?php
session_start();
//database connection
include('dbConnect.php');

if(isset($_POST['add_electionP'])){
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$mobile = $_POST['txtNumber'];
$enrollid =  $_POST['txtEnrollID'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$tmp_size=$_FILES['photo']['tmp_size'];
$tmp_typee=$_FILES['photo']['tmp_type'];
$Bio=$_POST['txtbio'];
move_uploaded_file($tmp_name,"img/".$image);
$insert="INSERT INTO `candidate3rd`(`name`, `email`, `mobile`, `enrollid`, `photo`, `Bio`,`Votess`) VALUES ('$name','$email','$mobile','$enrollid','$image','$Bio',0)";
// $insert="INSERT INTO candidates(txtName,txtEmail,txtNumber,txtEnrollID,photo,txtbio) VALUES('$name','$mobile','$enrollid','$image','$Bio')";
$run=mysqli_query($connect,$insert);   
    if($run){
        header("location:pending.php");        
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>insertPresidentCandidate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
    td {
        padding-top: 20px;
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="padding-top:20px;">Candidate Enroll</h1>
                <p style="padding-top:10px; font-weight:bold;">President Enroll</p>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr style="font-weight:bold;">
                            <td>Name :</td>
                            <td><input requiredtype="text" style="text-align: left;" name="txtName" autofocus></td>
                        </tr>
                        <tr style="font-weight:bold;">
                            <td>Email :</td>
                            <td><input requiredtype="email" style="text-align: left;" name="txtEmail"></td>
                        </tr>
                        <tr style="font-weight:bold;">
                            <td>Mobile :</td>
                            <td><input required type="number" style="text-align: left;" name="txtNumber">
                            </td>
                        </tr>
                        <tr style="font-weight:bold;">
                            <td>Enroll ID :</td>
                            <td><input required type="text" style="text-align: left;" name="txtEnrollID">
                            </td>
                        </tr>
                        <tr style="font-weight:bold;">
                            <td>Image :</td>
                            <td> <input required type="file" class="form-control" name="photo" value="">
                            </td>
                        </tr>

                        <tr style="font-weight:bold;">
                            <td>BIO:</td>
                            <td> <textarea cols="20" rows="5" type="text" name="txtbio" class="form-control"
                                    id="validationCustom05" required></textarea>
                                <div class="invalid-feedback">
                                    Please Write about Your self.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px; padding-bottom: 40px;"><button class="btn btn-primary"
                                    name="add_electionP">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/8.svg" alt="" srcset="">
            </div>
        </div>
    </div>
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