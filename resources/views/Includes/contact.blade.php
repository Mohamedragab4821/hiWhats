<section class="tj-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <div class="contact-left-content" data-sal="slide-right" data-sal-duration="1000"
                        data-sal-delay="300">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Get In touch</span>
                            <h2 class="sec-title">Have any Project Plan In your Mind?</h2>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making this the first true generator on the
                                    Internet. It uses a dictionary of over 200 Latin words,
                                </p>
                            </div>
                        </div>
                        <div class="comntact-list">
                            <div class="contact-icon">
                                <img src="assets/images/icon/phone.svg" alt="Icon" />
                            </div>
                            <div class="contact-header">
                                <span class="d-block">For urgent help</span>
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
                                <span class="d-block">Mail us 24/7</span>
                                <li><span class="text-muted me-1"></span><a class="nav-link-style" href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" class="contact-form-box" data-sal="slide-left"
                        data-sal-duration="1000" data-sal-delay="300" action="{{ route('contacts.store') }}" method="POST">
                        <div class="form-input">
                            <label class="form-label" for="cf-name">الاسم:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required name="name">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-email">الايميل:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required name="email">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-phone">الهاتف:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required name="phone">
                        </div>
                        <div class="form-input">
                            <label class="form-label" for="cf-subject">الخدمه:</label>
                        <input class="form-control" type="text" id="cf-subject" name="product">
                        </div>
                        <div class="form-textarea">
                            <label class="form-label" for="cf-message">ارساله:&nbsp;<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required name="message"></textarea>
                        </div>
                        <div class="tj-contact-button">
                            <button class="btn tj-primary-btn" type="submit">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-section-shape">
        <div class="contact-bg-shape shake-y">
            <img src="assets/images/shape/shape-31.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape1 pulse">
            <img src="assets/images/shape/shape-32.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape2 pulse">
            <img src="assets/images/shape/shape-33.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape3 shake-y">
            <img src="assets/images/shape/shape-34.svg" alt="Shape" />
        </div>
    </div>
</section>