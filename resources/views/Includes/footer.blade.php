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
        text-align: right; /* Ensure text aligns to the right */
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
        direction: ltr; /* Ensure icons align from left to right */
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
        margin-left: 10px; /* Adjust for RTL */
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
        text-align: right; /* Ensure text aligns to the right */
      }

      .copyright-area p {
        margin: 0;
      }

      .copyright-menu ul {
        display: flex;
        gap: 15px;
        list-style: none;
        padding: 0;
        direction: ltr; /* Ensure links align from left to right */
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
        right: 10px; /* Adjust for RTL */
        z-index: 1001; /* Ensure icons are above the wave effect */
      }

      .icon-container a {
        color: rgb(255, 255, 255);
        font-size: 20px; /* Adjust size as needed */
        margin-left: 10px; /* Adjust spacing for RTL */
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
        right: 10px; /* Adjust for RTL */
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
      .footer-widget.footer1-col-1 {
    display: flex;
justify-content: space-between;
margin-left: 35%}

.footer-logo {
    margin-bottom: 20px; /* Space between the logo and the social icons */
}

.footer-share ul {
    display: flex;
    gap: 15px; /* Space between social icons */
}

.footer-share ul li a {
    color: #fff; /* Ensure icon color matches your design */
    font-size: 20px; /* Adjust size as needed */
    display: flex;
    align-items: center; /* Center the icon vertically */
}
.footer_title {
    color: #f1c40f; /* Example color: a warm, friendly yellow */
    font-size: 18px; /* Adjust font size if needed */
    margin-bottom: 15px; /* Space below the title */
    font-weight: bold; /* Make the title stand out */
}

    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                      <div class="footer-widget footer1-col-1 d-flex">
                        <div class="footer-content-info">
                            <div class="footer-logo">
                                <a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{ route('home') }}">
                                    <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="200" height="70" alt="فكرة">
                                </a>
                            </div>
                            <div class="footer-share" style="padding-left: 12%;">
                                <ul class="dot-style">
                                    <li>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="footer-widget footer1-col-2">
                          <h4 class="footer_title">الأقسام</h4>
                          <div class="widget_nav_menu">
                              <div class="footer-menu">
                                  <ul>
                                      @foreach ($categories as $category)
                                          <li><a href="{{ route('categories', ['id' => $category->category_id]) }}">{{ $category->category_name }}</a></li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-3">
                        <h4 class="footer_title">معلومات</h4>
                        <div class="widget_nav_menu">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('services') }}">كل الخدمات</a></li>
                                    <li><a href="{{ route('contacts.index') }}">طلب خدمة</a></li>
                                    <li><a href="{{ route('whoAreWe') }}">من نحن</a></li>
                                    <li><a href="{{ route('ourVision') }}">رؤيتنا</a></li>
                                    @foreach($pages as $page)
                                        @if($page->add_to == 'header' && $page->status == 'published')
                                            <li><a href="{{ route('page.show', ['slug' => $page->slug]) }}">{{ $page->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-4">
                            <h4 class="footer_title">معلومات الاتصال</h4>
<div class="widget_contact_menu">
    <ul>
        <!--<li>-->
        <!--    <span><i class="fas fa-map-marker-alt"></i></span>76 بلو وينتر سنتر، نيويورك-->
        <!--</li>-->
        <li>
            <span><i class="fas fa-envelope"></i></span>
            <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
        </li>
        <li>
            <span><i class="fas fa-phone"></i></span>
            <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
        </li>
        <li>
            <span><i class="fas fa-phone"></i></span>
            <a href="tel:{{ $settings->whatsapp }}">{{ $settings->whatsapp }}</a>
        </li>
    </ul>
</div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-5">
                            <h4 class="footer_title">اشترك</h4>
                            <div class="subscription-form">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="بريدك الإلكتروني">
                                    <button type="submit" class="btn-accent">اشترك</button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p style="float: left">&copy; 2024 جميع الحقوق محفوظة</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
