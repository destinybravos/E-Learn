<script src="js/jquery.js"></script>

<body>
    <style>
        .footer {
            margin-top: 1px;
            /* margin-bottom: 50px; */
            /* padding: 70px 20px 15px; */
            padding: 0px 20px 15px;
            background-color: #1a1a1a;
            /* background-image: linear-gradient(#00331a, #003333); */
            /* background-image: linear-gradient(#00001a, #003333); */
            color: #fff;
        }

        .footer-logo {
            width: 100px;
            margin-top: 53px;
            margin-bottom: 0px;

        }

        .footer h4 {
            text-align: left;
            margin-top: 65px;
            margin-bottom: 25px;
        }

        .footer p {
            font-size: 12px;
            text-align: justify;
            padding-right: 35px;

        }

        .footer .row .fab {
            padding-right: 20px;
            font-size: 15px;
        }

        .footer .row .fa {
            padding-right: 20px;
            font-size: 15px;

        }

        .footer hr {
            margin-top: 10px;
            background: #efefef;
        }

        .fa-heart {
            margin: 0.5px;
            color: #f44336;
        }

        .footer .copyright {
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }

        @media(max-width:767px) {
            .footer p {
                text-align: center;
            }

            .footer h4 {
                text-align: center;
            }

            /* .footer-logo {} */
        }
    </style>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- <a href="index.php" style="color:white; font-size:2em;margin-top: 100%;" class="footer-logo"><strong>E-Learn</strong></a> -->
                    <a href="index.php"><img src="./img/elearning.png" class="footer-logo" style="align-items: center;"></a>
                    <p>The primary aim of this initiative is to equip the students for better performance in future examinations.
                        Students performances on previous exams are analyzed with
                        the secondary aim of detecting the weaknesses.
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Features</h4>
                    <a href="#">
                        <p>Deals & Offers</p>
                    </a>
                    <a href="#">
                        <p>Student Reviews</p>
                    </a>
                    <a href="#">
                        <p>Cancelation Policies</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <h4>Quick Contact</h4>
                    <p><i class="fa fa-phone-square"></i>+2348163875505</p>
                    <p><a href="#"><i class="fa fa-envelope"></i>support@e-learning.com</a></p>
                    <p><i class="fa fa-home"></i>No. 7 Umuerim FEPONEK</p>
                </div>
                <div class="col-md-3">
                    <h4>Follow Us On</h4>
                    <p><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a></p>
                    <p><a href="#"><i class="fab fa-youtube"></i>Youtube</a></p>
                    <p><a href="#"><i class="fab fa-twitter-square"></i>Twitter</a></p>
                    <p><a href="#"><i class="fab fa-instagram-square"></i>Instagram</a></p>
                </div>
            </div>
            <hr>
            <p class="copyright">Footer made with <i class="fa fa-heart"></i> by DemzyOfficial </p>
        </div>
    </section>
</body>