<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Website</title>
    <!-- External Files/CSS -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/elearning.png">
    <!-- JQuery Library -->
    <script src="js/jquery.js"></script>
</head>

<body>
    <?php
    include_once 'head.php';
    include_once 'ajax/connect.php';
    ?>

    <div class="container" style="margin: 30px auto;">
        <div class="row">
            <!-- contact details -->
            <div class="col-md-8">
                <img src="./img/contact1.png" alt="" style="width:100% ; margin-top:-7% ">
                <h1 style="margin-top: -5% ">Get in Touch with us</h1>
                <p>Contact us if you're interested in Learning or Teaching Online, contact
                    our capable team of IT professionals for more information and
                    benefit
                </p>
                <div class="boarder" style="border-left: solid 2px #1a1a1a; max-width:100%;padding: 0.7rem 1rem; margin:25px 0px">
                    <p> You can Please click on the button below to speak with our customer service personel </p>
                    <div>
                        <i class="fa fa-phone-alt " style="background-color: #005c99; max-width:100%;padding: 0.5rem 1rem; color:whitesmoke;cursor:pointer; margin:0px 0px"> Call Us Now</i>
                    </div>
                </div>

                <!-- contact information -->

                <div class="row" style="margin-top:50px">
                    <div class="col-md-6">
                        <h3 class="contact_title">Imo State</h3>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <p>No.7 Umuerim Street</p>
                                <p>Owerri West, Imo State.</p>
                            </div>
                        </div>
                        <div class="media mt-0">
                            <div class="media-left">
                                <i class="fa fa-envelope" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <a href="support@e-learn.com">
                                    <p>support@e-learn.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="media mt-0">
                            <div class="media-left">
                                <i class="fa fa-phone-alt" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+2348163875505">
                                    <p>08163875505</p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="contact_title">Imo State</h3>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <p> Umuerim Junction FEPONEK</p>
                                <p>Owerri West, Imo State.</p>
                            </div>
                        </div>
                        <div class="media mt-0">
                            <div class="media-left">
                                <i class="fa fa-envelope" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <a href="support@e-learn.com">
                                    <p>support@e-learn.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="media mt-0">
                            <div class="media-left">
                                <i class="fa fa-phone-alt" style="margin-right: 5px;"> </i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+2348163875505">
                                    <p>08163875505</p>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- contact form -->
                <div class="container-fluid" style="max-width:700px; margin-top:30px">
                    <h3>Message Us Here</h3>
                    <form method="POST" action="ajax/add_message.php">
                        <div class="row">


                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="Your Name" id="name" required name="name" type="text" value="" style="box-shadow:none"> <br>
                                <input class="form-control" placeholder="Email Address" id="email" required name="email" type="email" value="" style="box-shadow:none">

                            </div>

                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="Phone Number" id="phone" required name="phone" type="tel" value="" style="box-shadow:none"> <br>
                                <input class="form-control" placeholder="Subject" id="subject" required name="subject" type="text" value="" style="box-shadow:none">
                            </div>

                            <div class="form-group col-md-12">
                                <textarea class="form-control" style="resize:none;box-shadow:none" name="message" placeholder=" Message Us Here" id="message" required name="message" cols="80" rows="10"></textarea>
                            </div>

                            <div class="form-group col-md-12 ">
                                <div class="input-group">
                                    <input class="btn btn-primary" name="btn_submit" id="" type="submit" value="Send message">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.869908130181!2d7.025900414765352!3d5.4367207960570685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425eb554f4c57b%3A0xdc75dc624ad32894!2sProgrammers%20City!5e0!3m2!1sen!2sng!4v1591884088444!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <?php include_once "sidebar.php";  ?>
            </div>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>
</body>

</html>