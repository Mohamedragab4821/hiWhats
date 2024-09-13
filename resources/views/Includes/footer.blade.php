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
    <footer class="footer">
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
                                            <a href="#">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.51962 6.1948L13.8489 0H12.586L7.95861 5.37887L4.26275 0H0L5.58887 8.13379L0 14.63H1.26293L6.14957 8.94974L10.0527 14.63H14.3154L8.51929 6.1948H8.51962ZM1.71797 0.950725H3.65775L12.5866 13.7225H10.6468L1.71797 0.950725Z"
                                                        fill="#161616" />
                                                </svg>
                                            </a>
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
                                    <li><span><i class="fa-solid fa-location-dot"></i></span>
                                        <a href="#">123, Example Street, City, Country</a>
                                    </li>
                                    <li><span><i class="fa-solid fa-phone"></i></span>
                                        <a href="#">123-456-7890</a>
                                    </li>
                                    <li><span><i class="fa-solid fa-envelope"></i></span>
                                        <a href="#">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section-shape">
            <div class="footer-bg-shape">
                <img src="assets/images/footer/footer-bg-shape.png" alt="Shape" />
            </div>
            <div class="footer-bg-shape1">
                <img src="assets/images/footer/footer-bg-shape1.png" alt="Shape" />
            </div>
            <div class="footer-bg-shape2">
                <img src="assets/images/footer/footer-bg-shape2.png" alt="Shape" />
            </div>
            <div class="footer-bg-shape3">
                <img src="assets/images/footer/footer-bg-shape3.png" alt="Shape" />
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>© 2024 All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <div class="copyright-menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="icon-container">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
    </div>
</body>
</html>
