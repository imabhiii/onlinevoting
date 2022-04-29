<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!--Year Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold mt-4">Select Voting System</h2>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="primeMinister_Candidate.php"><button class="btn-special mt-5">Prime Minister</button></a>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="President_Candidate.php"><button class="btn-special mt-5">President</button></a>
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="EducationMinister_candidate.php"><button class="btn-special mt-5">Education
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