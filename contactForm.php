<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
</head>

<body>
    <?php
    include("header.html")
    ?>
    <!--Contact Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5 mt-5 mb-5 pb-5 text-contact">
                        <h1>Contact Form</h1>
                        <p style="padding-bottom:50px;">Any Queries , Drop Contact Form</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-form-home">
                        <h1 class="text-center pt-3 pb-5">Contact Form</h1>
                        <form action="contact.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="txtName"
                                        required>
                                    <div class="valid-feedback">
                                        Correct!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-10 mb-3">
                                    <label for="validationCustom03">Email Id</label>
                                    <input type="text" class="form-control" name="txtEmail" id="validationCustom03"
                                        required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email id.
                                    </div>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="validationCustom05">Message</label>
                                    <textarea cols="20" rows="5" type="text" name="txtMessage" class="form-control"
                                        id="validationCustom05" required></textarea>
                                    <div class="invalid-feedback">
                                        Please Enter a Message.
                                    </div>
                                </div>
                            </div>
                            <button class="SubmitBtn" name="add_contact" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contacting">
                        <img src="img/8.svg" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.html")
    ?>
</body>

</html>