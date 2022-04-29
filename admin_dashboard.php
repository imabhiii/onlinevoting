<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("location: admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="admin_login.php">Let'sVote</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__li">
                        <a class="nav__a" href="adminPanel.php">Home</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="admin_dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_details_year.php">Users</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_cand_year.php">Candidates</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="user_suggestion.php">Suggestion</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="show_contact.php">Contact</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__a" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top: 15px;">ADMIN DASHBOARD</h1>
                </div>
            </div>
        </div>
    </section>
    <?php
            include('result_year.php');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>