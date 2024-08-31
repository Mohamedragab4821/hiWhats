<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الوثيقة</title>
    <style>
      i{
        padding: 5px
      }
    </style>
</head>
<body>
    <footer class="footer bg-darker" style="direction: rtl; text-align: right;">
        <div class="bg-dark">
          <div class="container py-5">
            <div class="row py-lg-4">
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="widget pb-3 mb-lg-4">
                  <h3 class="widget-title text-light pb-1">ابق على اطلاع</h3>
                  <h3 class="widget-title text-light pb-1">ابق على اطلاع</h3>
                  <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                      <input style="padding: 10px" class="form-control rounded-start" type="email" name="EMAIL" placeholder="     بريدك الالكتروني" required>
                      <a href="{{route('contacts.index')}}" class="btn btn-accent" type="submit" name="subscribe">اشترك*</a> 
                    </div>
                    <!-- لا ينبغي للأشخاص الحقيقيين ملء هذا وانتظار أشياء جيدة - لا تقم بإزالة هذا أو المخاطرة بتسجيل الروبوتات-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                      <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                    </div>
                    <div class="form-text text-light opacity-50">*اشترك في نشرتنا الإخبارية لتلقي عروض الخصم المبكر والتحديثات ومعلومات المنتجات الجديدة.</div>
                    <div class="subscription-status"></div>
                  </form>
                </div>
                <div><a class="btn-social bs-light bs-twitter me-2 mb-2" href="{{ $settings->twitter_url }}"><i class="ci-twitter"></i></a>
                    <a class="btn-social bs-light bs-facebook me-2 mb-2" href="{{ $settings->facebook_url }}"><i class="ci-facebook"></i></a>
                    <a class="btn-social bs-light bs-instagram me-2 mb-2" href="{{ $settings->insta_url }}"><i class="ci-instagram"></i></a>
                    <a class="btn-social bs-light bs-youtube me-2 mb-2" href="{{ $settings->youtube_url }}"><i class="ci-youtube"></i></a></div>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="d-flex flex-sm-row flex-column justify-content-sm-between mt-n4 mx-lg-n3">
                  <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                    <h3 class="widget-title text-light">الشركة</h3>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="{{ route('ourVision') }}">من نحن</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="{{ route('whoAreWe') }}">كيف تعمل</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="{{ route('contacts.index') }}">الدعم</a></li>
                      <li class="widget-list-item">
                        <a class="widget-list-link"
                           @if (Auth::check())
                               href="{{ route('editUser', ['id' => Auth::user()->id]) }}"
                           @else
                               href="#signin-modal" data-bs-toggle="modal"
                           @endif>
                           حسابي
                        </a>
                    </li>
                    @foreach($pages as $page)
                    @if($page->add_to=='footer')
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.show',['slug'=>$page->slug]) }}">{{$page->title}}</a></li>
                    @endif
                    @endforeach

                    </ul>
                  </div>
                  <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                    <h3 class="widget-title text-light">تواصل معنا</h3>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا">واتساب</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="{{ route('contacts.index') }}">تويتر</a></li>
                    </ul>
                  </div>
                  <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                    <ul class="widget-list">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container my-lg-4 my-3 py-2">
          <div class="d-flex flex-md-row flex-column-reverse align-items-center justify-content-md-between">
            <div class="fs-xs text-light opacity-50">&copy; جميع الحقوق محفوظة. تم الإنشاء بواسطة <a class="text-light" href="#" target="_blank" rel="noopener">فكرة</a></div>
            <div class="d-flex align-items-start mb-md-0 mb-3 mx-n1">
            </div>
          </div>
        </div>
      </footer>

</body>
</html>