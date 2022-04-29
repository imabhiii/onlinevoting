<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>SubmitVotePresident</title>
<!--google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center>
        <?php
        session_start();
        $num = $_SESSION['user'];

        include("dbConnect.php");

        $select = "select * from users where voterid ='$num'";

        $run = mysqli_query($connect, $select);
        $row_user = mysqli_fetch_array($run);
        $name = $row_user['name'];
        $Votes3 = $row_user['votes3'];

        if ($Votes3 == 'NO') {
        ?>

            <div style="margin-left: 250px;">
                <br><br>
                <h2 style="background-color: red;">Please confirm Your Vote </h2>

                <!-- ============PHP GET=================================== -->
                <?php
 include("dbConnect.php");
                if (isset($_GET['Party'])) {
                    $PartyVote = $_GET['Party'];

                    $select = "select * from candidate3rd where name='$PartyVote'";
                    $run = mysqli_query($connect, $select);

                    $row_user = mysqli_fetch_array($run);
                    $ename = $row_user['name'];
                    $eVotess = $row_user['Votess'];
                    $eImage = $row_user['photo'];
                }
                ?>

                <!-- ============PHP GET=================================== -->

                <form action="" method="POST"><br>
                    <h5 style="text-transform: capitalize;">You Voted : <?php echo $PartyVote; ?></h5><br>
                    <img src="img/<?php echo $eImage; ?>" style="width: 400px;height: 400px; border-radius: 30%;">
                    <input type="hidden" name="Votess" value="<?php echo $eVotess; ?>" required placeholder="Enter Name"><br>
                    <input class="btn btn-primary" type="submit" name="submit">
                    <a href="President_Candidate.php" class="btn btn-warning">cancel</a>
                </form>

                <!-- ============PHP Update=================================== -->
                <?php
               include("dbConnect.php");
                if (isset($_POST['submit'])) {
                    $Votess = $_POST['Votess'];

                    $eVotess = $eVotess + 1;
                    $update = "update candidate3rd set Votess='$eVotess' where name='$PartyVote'";

                    $run_update = mysqli_query($connect, $update);
                    if ($run_update === true) {
                        echo "<script> window.open('successfully.php','_self') </script>";
                        // echo "<H5 style='color:green;text-align:center;'>Voted Successfully</h5>";
                    } else {
                        echo "<center><H5 style='color:red;text-align:center;'>Samething Went Wrong</h5></center>" . mysqli_error($conn);
                    }

                    include("dbConnect.php");
                    $Rupdate = "update users set votes3='YES' where name='$name'";

                    $Rrun_update = mysqli_query($connect, $Rupdate);
                    if ($Rrun_update === true) {
                        // echo "<script> window.open('LoginVoteSuccess.php','_self') </script>";
                        echo "<H5 style='color:green;text-align:center;'>Voted YES</h5>";
                    } else {
                        echo "<center><H5 style='color:red;text-align:center;'>Samething Went Wrong NNOo</h5></center>" . mysqli_error($conn);
                    }
                }

                ?>
                <!-- ============PHP Update=================================== -->
            </div>
        <?php
        } else {
            echo "<br><br>";
            echo "<center style='margin-left: 270px;color:red;'><h3>You Already Voted.</h3></center>";
            echo "<br><br>";
            echo '<a href="logout.php" style="margin-left: 270px;" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> LogOut</a>';
        }
        //   session_destroy(); 
        ?>
    </center>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>