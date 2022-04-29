<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details for Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--fontskits-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <!--Navbar-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="admin_login.php">Let'sVote</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
    </section>
    <section style="padding-top:50px; padding-bottom:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class=" table table-striped table-hover table-bordered">
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Date of Birth</th>
                            <th>Mobile</th>
                            <th>Voter ID</th>
                            <th>Profile</th>
                            <th>Citizenship Front</th>
                            <th>Citizenship Back</th>
                            <th>Voted status</th>
                        </tr>

                        <?php session_start();
            include('dbConnect.php');
                       
            $sql="select * from users order by id desc";
            $data=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($data)){
            
            ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['voterid']; ?></td>
                            <td><img src="img/<?php echo $row['photo']; ?>" style="width: 100px;height: 100px; border-radius: 50%;"></td>
                            <td><img src="img/<?php echo $row['citizenfront']; ?>" style="width: 100px;height: 100px;"></td>
                            <td><img src="img/<?php echo $row['citizenback']; ?>" style="width: 100px;height: 100px;"></td>
                            <td><?php echo $row['votes2']; ?></td>
                        </tr>
                        <?php }?>
                    </table>
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