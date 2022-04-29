<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PresidentVotingPage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .card {
        margin: 6%;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0, 1);
        background-color: white;
        width: 100%;
        border-radius: 6px;
        box-shadow: 0px 2px 14px  rgba(0, 0, 0, 0.3);
    }
    body{
        background-image: linear-gradient(to right, #a517ba,#5f1178);
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
                        <a class="nav__a" href="login.php">Login</a>
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
    <!-- candiateof PM -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4"style=" color: White;">Online Voting System</h1>
                <p class="text-center" style="padding-top:10px;color: White; font-weight:bold;">President Candidate</p>
            </div>
            <?php include("dbConnect.php");?>
        
               <?php
                include("dbConnect.php");
                    $query="select * from users";
                    $run=mysqli_query($connect,$query);
                    $row=mysqli_fetch_array($run);
                    $RStatus=$row['status'];
                    if($RStatus=='ON'){
                        include("dbConnect.php");
                        $sql = "select * from candidate3rd where approve_status=1";
                        $run1=mysqli_query($connect,$sql);
                        while ($row1=mysqli_fetch_assoc($run1)) {
                            $Votess = $row1['Votess'];
                            ?>
                                <div class="col-md-3" style="margin-left: 45px;">
                <div class="card" style="width: 19.5rem;">
                <a href="SavedData3.php"><img class="card-img-top" src="<?php echo "img/".$row1['photo'];
                        ?>" alt="candidate" height="200px" width="200px"></a>               
                <div class="card-body">

                        <h2 class="card-title"><?php echo $row1['name']; ?></h2>
                        <h2 class="card-text" style="font-size:1.01em;"><?php echo $row1['Bio']; ?></h2>
                        <h2 class="card-title"> <a href="SavedData3.php?Party=<?php echo $row1['name']; ?>" class="btn btn-primary">Vote</a></h2>
                </div>
            </div>
        </div>
    <!-- </div> -->
   <?php
                    }
                    }else{
                        echo "<br>";
      echo "<center style='color:red;'><h3>No Voting is Available.</h3></center>";
                    }?>
    </div>
<br>


    <!--Footer/Social media section-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <hr>
                    <div class="footer-social">
                        <ul class="d-flex list-unstyled p2 footer__social__ul">
                            <li style="list-style: none; padding: 10px; "><a href="index.html"
                                    style="text-decoration: none; color: white;">Home</a></li>
                            <li style="list-style: none; padding: 10px; "><a href="about.php"
                                    style="text-decoration: none; color:white;">About</a> </li>
                            <li style="list-style: none; padding: 10px; "><a href="suggestion.html"
                                    style="text-decoration: none; color: white;">Suggestion</a></li>
                            <li style="list-style: none; padding: 10px; "><a href="contact_form.php"
                                    style="text-decoration: none; color: white;">Contact</a></li>
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