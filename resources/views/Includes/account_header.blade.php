<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light bg-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.html"><img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a>
              <div class="dropdown-menu dropdown-menu-end">
                <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">@foxnet_creator</h6><a class="dropdown-item d-flex align-items-center" href="nft-account-settings.html"><i class="ci-settings opacity-60 me-2"></i>Website Settings</a><a class="dropdown-item d-flex align-items-center" href="nft-account-my-items.html"><i class="ci-image opacity-60 me-2"></i>My Items<span class="fs-xs text-muted ms-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-my-collections.html"><i class="ci-view-list opacity-60 me-2"></i>My Collections<span class="fs-xs text-muted ms-auto">2</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-xs text-muted ms-auto">3</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-notifications.html"><i class="ci-bell opacity-60 me-2"></i>Notifications</a>
                </div>
              </div>
          </div>
          <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
            <!-- Search (mobile)-->
            <div class="d-lg-none py-3">
              <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="What do you need?">
              </div>
            </div>
            <!-- Primary menu-->
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">الصفحه الرئيسه</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">الاقسام</a>
                  <ul class="dropdown-menu">
                      {{-- @foreach ($categorys as $category)
                      <li><a class="dropdown-item" href="nft-catalog-v1.html">category->category_name</a></li>
                      @endforeach --}}
                    <li><a class="dropdown-item" href="nft-catalog-v1.html">Catalog v.1</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item "><a class="nav-link" href="home-nft.html">كل الخدمات</a></li>
                <li class="nav-item "><a class="nav-link" href="{{route('contacts.index')}}">طلب خدمه</a></li>
                <li class="nav-item "><a class="nav-link" href="home-nft.html">من نحن</a></li>
                <li class="nav-item "><a class="nav-link" href="home-nft.html">رؤيتنا</a></li>
  
  
                @if(Auth::user())
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">حسابي</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('profileSetting')}}">Profile Settings</a></li>
                    <li><a class="dropdown-item" href="{{route('messages.index')}}">Messages</a></li>
                    <li><a class="dropdown-item" href="{{route('settings.index')}}">Website Settings</a></li>
                    <li><a class="dropdown-item" href="nft-account-favorites.html">Favorites</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                  </ul>
                </li>
                @endif
              </ul>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="container py-2">
            <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-start" type="text" placeholder="What do you need?">
            </div>
          </div>
        </div>
      </header>
</body>
</html>