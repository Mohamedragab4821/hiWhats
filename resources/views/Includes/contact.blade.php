<section class="tj-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <div class="contact-left-content" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                        <div class="tj-sec-heading">
                            <span class="sub-title">تواصل معنا</span>
                            <h2 class="sec-title">هل لديك خطة مشروع في ذهنك؟</h2>
                            <div class="desc">
                                <p>
                                    جميع مولدات لوريم إيبسوم على الإنترنت تميل إلى تكرار الكتل المعرفة مسبقاً حسب الحاجة، مما يجعل هذا أول مولد حقيقي على الإنترنت. يستخدم قاموسًا يحتوي على أكثر من 200 كلمة لاتينية.
                                </p>
                            </div>
                        </div>
                        <div class="comntact-list">
                            <div class="contact-icon">
                                <img src="assets/images/icon/phone.svg" alt="Icon" />
                            </div>
                            <div class="contact-header">
                                <span class="d-block">للمساعدة العاجلة</span>
                                <ul class="list-unstyled fs-sm mb-0">
                                    <li><span class="text-muted me-1">واتساب:</span><a class="nav-link-style" href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا">{{$settings->whatsapp}}</a></li>
                                    <li><span class="text-muted me-1">مكالمات:</span><a class="nav-link-style" href="tel:{{$settings->phone}}">{{$settings->phone}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="comntact-list">
                            <div class="contact-icon">
                                <img src="assets/images/icon/mail.svg" alt="Icon" />
                            </div>
                            <div class="contact-header">
                                <span class="d-block">ارسل لنا بريداً إلكترونياً على مدار 24/7</span>
                                <li><span class="text-muted me-1"></span><a class="nav-link-style" href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" class="contact-form-box" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="300" action="{{ route('contacts.store') }}" method="POST">
                        <div class="form-input">
                            <label class="form-label" for="cf-name">الاسم:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-name" placeholder="محمد أحمد" required name="name">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-email">البريد الإلكتروني:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" id="cf-email" placeholder="example@email.com" required name="email">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-phone">رقم الهاتف:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required name="phone">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-subject">الخدمة:</label>
                            <input class="form-control" type="text" id="cf-subject" name="product">
                        </div>
                        <div class="form-textarea">
                            <label class="form-label" for="cf-message">الرسالة:&nbsp;<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cf-message" rows="6" placeholder="يرجى وصف طلبك بالتفصيل" required name="message"></textarea>
                        </div>
                        <div class="tj-contact-button">
                            <button class="btn tj-primary-btn" type="submit">أرسل الآن</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-section-shape">
        <div class="contact-bg-shape shake-y">
            <img src="assets/images/shape/shape-31.svg" alt="شكل" />
        </div>
        <div class="contact-bg-shape1 pulse">
            <img src="assets/images/shape/shape-32.svg" alt="شكل" />
        </div>
        <div class="contact-bg-shape2 pulse">
            <img src="assets/images/shape/shape-33.svg" alt="شكل" />
        </div>
        <div class="contact-bg-shape3 shake-y">
            <img src="assets/images/shape/shape-34.svg" alt="شكل" />
        </div>
    </div>
</section>
