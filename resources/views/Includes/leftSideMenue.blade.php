<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وثيقة</title>
    <!-- إضافة رابط لمكتبة FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <aside class="col-lg-3 pe-xl-5">
        <!-- محوّل قائمة الحساب (مخفي على الشاشات الأكبر من 992px)-->
        <div class="d-block d-lg-none p-4">
            <a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse">
                <i class="fas fa-bars me-2"></i>قائمة الحساب
            </a>
        </div>
        <!-- القائمة الفعلية-->
        <div class="h-100 border-end mb-2">
            <div class="d-lg-block collapse" id="account-menu">
                <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('profileSetting') }}">
                            <i style="padding: 5px" class="fas fa-user-cog opacity-60 me-3"></i>إعدادات الحساب
                        </a>
                    </li>
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('favorites.index') }}">
                            <i style="padding: 5px" class="fas fa-heart opacity-60 me-3"></i>المفضلة
                            <span class="fs-sm text-muted ms-auto"></span>
                        </a>
                    </li>
        
                    <!-- التحقق من وصول المستخدم كمدير -->
                    @if(Auth::user()->access == 'admin')
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('userManagement') }}">
                                <i style="padding: 5px" class="fas fa-users-cog opacity-60 me-3"></i>إدارة المستخدمين
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('settings.index') }}">
                                <i style="padding: 5px" class="fas fa-cogs opacity-60 me-3"></i>إعدادات الموقع
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('ads.index') }}">
                                <i style="padding: 5px" class="fas fa-ad opacity-60 me-3"></i>إعدادات الإعلانات
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('productMangement') }}">
                                <i style="padding: 5px" class="fas fa-box opacity-60 me-3"></i>إدارة المنتجات
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('categoryMangement') }}">
                                <i style="padding: 5px" class="fas fa-tags opacity-60 me-3"></i>إدارة الفئات
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('messages.index') }}">
                                <i style="padding: 5px" class="fas fa-envelope opacity-60 me-3"></i>الرسائل
                            </a>
                        </li>
                    @endif
        
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('logout') }}">
                            <i style="padding: 5px" class="fas fa-sign-out-alt opacity-60 me-3"></i>تسجيل الخروج
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </aside>
</body>
</html>
