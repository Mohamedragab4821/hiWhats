<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <!-- Include custom CSS if needed -->
    <style>
        .password-toggle {
            position: relative;
        }
        .password-toggle-btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        },

    </style>
</head>
<body >
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" style="direction: rtl; text-align: right;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #ffffff;">
                <div class="modal-header bg-secondary" style="background-color: rgb(0 35 83) !important;">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true" style="color: white">
                                <i class="ci-unlocked me-2 mt-n1 ms-4"></i>تسجيل دخول
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false" style="color: white">
                                <i class="ci-user me-2 mt-n1"></i>تسجيل جديد
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#forgot-password-tab" data-bs-toggle="tab" role="tab" aria-selected="false" style="color: white">
                                <i class="ci-lock me-2 mt-n1"></i>نسيت كلمة المرور
                            </a>
                        </li>
                    </ul>
                    <button class="btn-close " type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <!-- Sign In Form -->
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab" action="{{ route('signin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="si-email">ايميل</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required name="email" style="padding-left: 10px; padding-right: 10px;">
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">كلمة المرور</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required name="password" style="padding-left: 10px; padding-right: 10px;">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                {{-- <input class="form-check-input" type="checkbox" id="si-remember">
                                <label class="form-check-label" for="si-remember">Remember me</label> --}}
                            </div>
                            <a class="fs-sm" href="#" id="forgot-password-link">نسيت كلمة المرور</a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تسجيل</button>
                    </form>

                    <!-- Forgot Password Form -->
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="forgot-password-tab" action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="fp-email">ايميل</label>
                            <input class="form-control" type="email" id="fp-email" name="email" placeholder="johndoe@example.com" required style="padding-left: 10px; padding-right: 10px;">
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">ارسال لينك تغيير كلمة المرور</button>
                    </form>

                    <!-- Sign Up Form -->
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" action="{{ route('Registeration') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="su-name">الاسم بالكامل</label>
                            <input class="form-control" type="text" id="su-name" name="userName" placeholder="John Doe" required style="padding-left: 10px; padding-right: 10px;">
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="su-email">ايميل</label>
                            <input class="form-control" type="email" id="su-email" name="email" placeholder="johndoe@example.com" required style="padding-left: 10px; padding-right: 10px;">
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">كلمة المرور</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" name="password" required style="padding-left: 10px; padding-right: 10px;">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-phone">الهاتف</label>
                            <div class="password-toggle">
                                <input class="form-control" type="text" id="su-phone" name="phone" required style="padding-left: 10px; padding-right: 10px;">
                                <label class="password-toggle-btn"></label>
                            </div>
                        </div>
                        <!-- Image Selection Input -->
                        <div class="mb-3">
                            <label class="form-label" for="su-image" >صورة شخصيه</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*" style="border: black solid 1px">
                            <div class="invalid-feedback">Please select an image file.</div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Include custom JS if needed -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forgotPasswordLink = document.getElementById('forgot-password-link');
            forgotPasswordLink.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior
                const modalElement = document.getElementById('signin-modal');
                const modal = new bootstrap.Modal(modalElement);
                modal.show(); // Show the modal
                document.querySelector('a[href="#forgot-password-tab"]').click(); // Switch to the Forgot Password tab

                // Ensure backdrop and shadow are removed on close
                modalElement.addEventListener('hidden.bs.modal', function () {
                    modalElement.classList.remove('show'); // Ensure show class is removed
                });
            });
        });
    </script>
</body>
</html>
