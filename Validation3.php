<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Result(President)</title>
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
    .card-5 {
        border: 2px black solid;
        padding: 30px;
        margin-top: 5%;
        width: 70%;
        margin-left: auto;
        margin-right: auto;

    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-5">
                    <h2><strong>Result</strong></h2>
                    <hr>
                    <?php
include("dbConnect.php");

$sql="SELECT * from candidate3rd";
$result=mysqli_query($connect,$sql);
while($row_user=mysqli_fetch_array($result)){
    $name=$row_user['name'];
    $Bio=$row_user['Bio'];
    $nVotess=$row_user['Votess'];
?>
  <h4 style="text-transform: capitalize;"><b><?php echo $name ?> :</b></h4>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width:<?php echo $nVotess ?>%"><?php echo $nVotess ?>
                    </div>
                    </div>
                
<?php
}include("dbConnect.php");
$select = "select MAX(Votess)as MAX from candidate3rd";
$run = mysqli_query($connect, $select);
        $row_user = mysqli_fetch_array($run);
        $rVotess = $row_user['MAX'];
        if($rVotess>0){
            ?>
            <hr>
            <?php echo date('r'); ?>
            <h2 style="text-align: center;font-weight: bolder;">Declared Winner :</h2>
            <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Name</th>
                        <th>Votes</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <?php
                $select = "select * from candidate3rd where Votess='$rVotess'";
                $run = mysqli_query($connect, $select);
                $s = 0;
                while ($row_user = mysqli_fetch_array($run)) {
                    $name = $row_user['name'];
                    $Votess = $row_user['Votess'];
                    $Image = $row_user['photo'];
                    $s++;
                ?>
                    <tbody>
                        <tr style="text-transform: capitalize;">
                            <td><?php echo $s; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $Votess; ?></td>
                            <td><img src="img/<?php echo $Image; ?>" style="width: 100px;height: 100px; border-radius: 50%;"></td>
                        </tr>
                    <?php }
                } ?>
                    </tbody>
            </table>
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
<?php
include("footer.html");
?>