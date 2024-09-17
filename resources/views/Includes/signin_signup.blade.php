<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .modal-content {
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            background-color: #ffffff;
        }
        .modal-header {
            border-bottom: none;
            background-color: #007bff; /* Header background color */
            color: white;
            position: relative;
        }
        .modal-header .btn-close {
            filter: invert(1);
        }
        .modal-body {
            padding: 2rem;
        }
        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            position: absolute;
            top: 0;
            right: 0;
            background: #007bff;
            color: white;
            border-radius: 0.5rem;
            z-index: 1;
        }
        .nav-tabs .nav-link {
            border-radius: 0.5rem 0.5rem 0 0;
            margin-left: 0;
        }
        .nav-tabs .nav-link.active {
            background-color: #0056b3;
            color: #ffffff;
        }
        .nav-tabs .nav-link {
            background-color: #007bff;
            color: #ffffff;
        }
        .nav-tabs .nav-link:hover {
            background-color: #0056b3;
        }
        .tab-content {
            margin-top: 3rem; /* Space for the tabs */
        }
        .form-control {
            border-radius: 0.375rem;
            padding: 0.75rem;
            font-size: 0.875rem;
            background-color: #f1f3f5;
            border: 1px solid #ced4da;
        }
        .btn {
            border-radius: 0.375rem;
            padding: 0.75rem;
            font-size: 0.875rem;
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .password-toggle {
            position: relative;
        }
        .password-toggle-btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
        }
        .password-toggle-btn input {
            display: none;
        }
        .password-toggle-btn .password-toggle-indicator {
            width: 100%;
            height: 100%;
            background: url('path/to/eye-icon.svg') no-repeat center;
            background-size: contain;
        }
        .password-toggle-btn input:checked + .password-toggle-indicator {
            background: url('path/to/eye-off-icon.svg') no-repeat center;
            background-size: contain;
        }
        .fs-sm {
            font-size: 0.875rem;
        }
        .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body >
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" style="direction: rtl; text-align: right;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #ffffff;">
                <div class="modal-header bg-secondary" style="background-color: rgb(0 35 83) !important;">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">
                                <i class="ci-unlocked me-2 mt-n1"></i>تسجيل دخول
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                                <i class="ci-user me-2 mt-n1"></i>تسجيل جديد
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#forgot-password-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                                <i class="ci-lock me-2 mt-n1"></i>نسيت كلمة المرور
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <!-- Sign In Form -->
                        <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab" action="{{ route('signin') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="si-email">ايميل</label>
                                <input class="form-control" name="email" type="email" id="si-email" placeholder="johndoe@example.com" required name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="si-password">كلمة المرور</label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="password" id="si-password" required name="password">
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 d-flex flex-wrap justify-content-between">
                                <div class="form-check mb-2">
                                    {{-- <input class="form-check-input" type="checkbox" id="si-remember">
                                    <label class="form-check-label" for="si-remember">تذكرني</label> --}}
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
                                <input class="form-control" type="email" id="fp-email" name="email" placeholder="johndoe@example.com" required>
                                <div class="invalid-feedback">يرجى إدخال عنوان بريد إلكتروني صحيح.</div>
                            </div>
                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">ارسال لينك تغيير كلمة المرور</button>
                        </form>

                        <!-- Sign Up Form -->
                        <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" action="{{ route('Registeration') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="su-name">الاسم بالكامل</label>
                                <input class="form-control" type="text" id="su-name" name="userName" placeholder="John Doe" required>
                                <div class="invalid-feedback">يرجى إدخال اسمك بالكامل.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="su-email">ايميل</label>
                                <input class="form-control" type="email" id="su-email" name="email" placeholder="johndoe@example.com" required>
                                <div class="invalid-feedback">يرجى إدخال عنوان بريد إلكتروني صحيح.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="su-password">كلمة المرور</label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" id="su-password" name="password" required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="su-phone">الهاتف</label>
                                <input class="form-control" type="text" id="su-phone" name="phone" required>
                            </div>
                            <!-- Image Selection Input -->
                            <div class="mb-3">
                                <label class="form-label" for="su-image">صورة شخصية</label>
                                <input class="form-control" type="file" id="su-image" name="image" accept="image/*">
                                <div class="invalid-feedback">يرجى اختيار ملف صورة.</div>
                            </div>
                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تسجيل</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
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
