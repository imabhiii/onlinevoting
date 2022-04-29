<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Candidates Details</title>
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
    .btn-special {
        padding: 12px 24px;
        background-color: white;
        color: hsl(243, 80%, 62%);
        border-radius: 6px;
        border: 2px hsl(243, 80%, 62%) solid;
        transition: transform 250ms ease-in-out;
    }

    .btn-special:hover {
        transform: scale(1.1);
    }

    .btn-special:active {
        transform: scale(0.9);
    }
    </style>
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="admin_login.php">Let's Vote</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__li">
                        <a class="nav__a" href="admin_login.php">Home</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="admin_dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_suggestion.php">Suggestion</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="show_contact.php">Contact</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_details_year.php">Users</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_cand_year.php">Candidates</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Year Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold mt-4">Select user Candidate</h2>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="user_cand.php"><button class="btn-special mt-5">Prime
                            Minister</button></a>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="user_cand_3.php"><button class="btn-special mt-5">President</button></a>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="user_cand_2.php"><button class="btn-special mt-5">Education
                            Minister</button></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
include("footer.html");
?>