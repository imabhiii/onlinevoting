<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Adminpanel</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--custom css-->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
  body{
    width:max-content;
  }
  *{
    background-color:#333F63;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
</style>
<body>

<?php
include("dbConnect.php");
$sql="SELECT * FROM `admin`";
$run=mysqli_query($connect,$sql);
$row_user = mysqli_fetch_array($run);
$username=$row_user['username'];
$Query="select * from users";
$run1=mysqli_query($connect,$Query);
$row1=mysqli_fetch_array($run1);
$status=$row1['status']; 
?>

<div class="content">
<a class="navbar-brand navbar-light" style="color: white;" href="admin_dashboard.php"><h2>Let'sVote</h2></a>
    <p style="color: whitesmoke;text-align: end;"><?php echo date('D,d-M-y h:i:s A '); ?></p>
    <hr>
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-12 mb-8">
          <div class="card1">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
               <h2 style="color: whitesmoke;">PROFILE</h2>
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4 style="color: whitesmoke;"><?php echo $username; ?></h4>
                  <p class="text-secondary mb-4">Full Stack Developer</p>

                  <a href="adminPanel.php?str=<?php echo $status ?>" class="btn btn-primary">Voting <?php echo $status ?></a>
                  <a href="adminPanel.php?stp=<?php echo $status ?>" class="btn btn-danger">Voting Stop</a>
<hr>
                  <!-- =========================Voting Start======================= -->
                  <?php
                  if (isset($_GET['str'])) {
                    $str_Status = $_GET['str'];
                    $update = "update users set status='ON' where status='$str_Status'";
                    $run_str = mysqli_query($connect, $update);
                    if ($run_str === true) {
                      echo "<div style='color:green;text-align:center;'>Voting Start Successfully </div> ";
                    } else {
                      echo "<div style='color:red;text-align:center;'>Try Again</div>" . mysqli_error($connect);
                    }
                  }
                  ?>
                  <!-- =========================Voting Start======================= -->

                  <!-- =========================Voting Stop======================= -->
                  <?php
                  if (isset($_GET['stp'])) {
                    $stp_Status = $_GET['stp'];
                    $update = "update users set status='OFF' where status='$stp_Status'";
                    $run_stp = mysqli_query($connect, $update);
                    if ($run_stp === true) {
                      echo "<div style='color:green;text-align:center;'>Voting Stop Successfully</div> ";
                    } else {
                      echo "<div style='color:red;text-align:center;'>Try Again</div>" . mysqli_error($connect);
                    }
                  }
                  ?>
                  <!-- =========================Voting Stop======================= -->

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card mb-1" style="background-color: #333F63;">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <h5 class="mb-4" style="color: whitesmoke;">UserName</h5>
                </div>
                <div class="col-sm-9 text-secondary" style="background-color: whitesmoke;">
                  <?php echo $username; ?>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>