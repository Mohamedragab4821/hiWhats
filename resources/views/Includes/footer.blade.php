<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الوثيقة</title>
    <style>
      i {
        padding: 5px;
      }
      /* Basic reset */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* Footer styling */
      .footer {
        position: relative;
        width: 100%;
        background-color: #001e64 !important;
        overflow: hidden;
      }

      .footer-menu-area {
        padding: 40px 0;
        background-color: #001e64;
      }

      .footer-widget {
        padding: 0 15px;
      }

      .footer-logo img {
        max-width: 150px;
      }

      .footer-widget ul {
        list-style: none;
        padding: 0;
      }

      .footer-widget ul li {
        margin-bottom: 10px;
      }

      .footer-widget ul li a {
        color: #fff;
        text-decoration: none;
      }

      .footer-widget .footer-share ul {
        display: flex;
        gap: 10px;
      }

      .footer-widget .footer-share ul li a {
        color: #fff;
        font-size: 20px;
      }

      .footer-widget .widget_contact_menu ul li {
        margin-bottom: 10px;
        color: #fff;
      }

      .footer-widget .widget_contact_menu ul li span {
        margin-right: 10px;
      }

      .footer-widget .widget_contact_menu ul li a {
        color: #fff;
        text-decoration: none;
      }

      /* Styling for copyright and footer sections */
      .copyright-area {
        background-color: #0a1a4a;
        padding: 20px 0;
        color: #fff;
      }

      .copyright-area p {
        margin: 0;
      }

      .copyright-menu ul {
        display: flex;
        gap: 15px;
        list-style: none;
        padding: 0;
      }

      .copyright-menu ul li a {
        color: #fff;
        text-decoration: none;
      }

      .footer-section-shape {
        position: relative;
        padding: 30px 0;
      }

      .footer-bg-shape,
      .footer-bg-shape1,
      .footer-bg-shape2,
      .footer-bg-shape3 {
        position: absolute;
        width: 100%;
        height: auto;
        z-index: -1;
      }

      .footer-bg-shape img,
      .footer-bg-shape1 img,
      .footer-bg-shape2 img,
      .footer-bg-shape3 img {
        width: 100%;
        height: auto;
      }

      /* Animation keyframes for wave effect */
      @keyframes wave {
        0% {
          background-position-x: 0px;
        }
        100% {
          background-position-x: 1000px;
        }
      }

      @keyframes wave2 {
        0% {
          background-position-x: 0px;
        }
        100% {
          background-position-x: -1000px;
        }
      }

      /* Position icons at top left */
      .icon-container {
        position: absolute;
        top: 10px; /* Adjust as needed */
        left: 10px; /* Adjust as needed */
        z-index: 1001; /* Ensure icons are above the wave effect */
      }

      .icon-container a {
        color: rgb(255, 255, 255);
        font-size: 20px; /* Adjust size as needed */
        margin-right: 10px; /* Adjust spacing as needed */
      }

      .btn-accent {
        background-color: #091188; /* Change this to your desired color */
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        height: 3rem;
      }

      .subscription-form .form-control {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .subscription-form i {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
      }

      /* Wave layers for footer */
      .footer .air {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
        background-size: 1000px 100px;
      }

      .footer .air.air1 {
        animation: wave 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
      }

      .footer .air.air2 {
        animation: wave2 15s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
      }

      .footer .air.air3 {
        animation: wave 30s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
      }

      .footer .air.air4 {
        animation: wave2 5s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20px;
      }

    </style>
</head>
<body>
    <footer class="tj-footer-area"> <!-- Changed to tj-footer-area -->
        <div class="footer-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget footer1-col-1">
                            <div class="footer-content-info">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/footer-logo.png" alt="Logo" />
                                    </a>
                                </div>
                                <p>
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                    of letters, as opposed to using 'Content here.
                                </p>
                                <div class="footer-share">
                                    <ul class="dot-style">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-2">
                            <h4 class="footer_title">Departments</h4>
                            <div class="widget_nav_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Family Medicine</a></li>
                                        <li><a href="#">Radiology</a></li>
                                        <li><a href="#">Women’s Health</a></li>
                                        <li><a href="#">Optician</a></li>
                                        <li><a href="#">Pediatrics</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-3">
                            <h4 class="footer_title">Information</h4>
                            <div class="widget_nav_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-4">
                            <h4 class="footer_title">Contact Info</h4>
                            <div class="widget_contact_menu">
                                <ul>
                                    <li>
                                        <span><i class="fas fa-map-marker-alt"></i></span>76 Blue Winter Center, NYC
                                    </li>
                                    <li>
                                        <span><i class="fas fa-envelope"></i></span><a href="mailto:info@gmail.com">info@gmail.com</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-phone"></i></span><a href="tel:+1234567890">+123 456 7890</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-phone"></i></span><a href="tel:+9876543210">+987 654 3210</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-5">
                            <h4 class="footer_title">Subscribe</h4>
                            <div class="subscription-form">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                    <button type="submit" class="btn-accent">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-section-shape">
            <div class="footer-bg-shape">
                <img src="assets/images/shape/footer-bg.png" alt="Footer Shape">
            </div>
            <div class="footer-bg-shape1">
                <img src="assets/images/shape/footer-bg1.png" alt="Footer Shape">
            </div>
            <div class="footer-bg-shape2">
                <img src="assets/images/shape/footer-bg2.png" alt="Footer Shape">
            </div>
            <div class="footer-bg-shape3">
                <img src="assets/images/shape/footer-bg3.png" alt="Footer Shape">
            </div>
        </div> --}}
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>&copy; 2022, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="copyright-menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adding the wave animation -->
        <div class="air air1"></div>
        <div class="air air2"></div>
        <div class="air air3"></div>
        <div class="air air4"></div>
    </footer>
</body>
</html>
