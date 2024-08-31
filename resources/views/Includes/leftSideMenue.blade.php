<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <aside class="col-lg-3 pe-xl-5">
        <!-- Account menu toggler (hidden on screens larger 992px)-->
        <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
        <!-- Actual menu-->
        <div class="h-100 border-end mb-2">
          <div class="d-lg-block collapse" id="account-menu">
              <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0">
                      <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('profileSetting') }}">
                          <i class="ci-settings opacity-60 me-2"></i>Profile Settings
                      </a>
                  </li>
                  <li class="border-bottom mb-0">
                      <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('favorites.index') }}">
                          <i class="ci-heart opacity-60 me-2"></i>Favorites
                          <span class="fs-sm text-muted ms-auto"></span>
                      </a>
                  </li>
      
                  <!-- Check if the user has admin access -->
                  @if(Auth::user()->access == 'admin')
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('userManagement') }}">
                              <i class="ci-settings opacity-60 me-2"></i>User Management
                          </a>
                      </li>
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('settings.index') }}">
                              <i class="ci-sign-out opacity-60 me-2"></i>Website Settings
                          </a>
                      </li>
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('ads.index') }}">
                              <i class="ci-sign-out opacity-60 me-2"></i>Ads Home Settings
                          </a>
                      </li>
                      <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('pages.index')}}">
                            <i class="ci-sign-out opacity-60 me-2"></i>Pages Settings
                        </a>
                    </li>
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('productMangement') }}">
                              <i class="ci-bell opacity-60 me-2"></i>Product Mangement
                          </a>
                      </li>
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('categoryMangement') }}">
                              <i class="ci-bell opacity-60 me-2"></i>Category Mangement
                          </a>
                      </li>
                      <li class="border-bottom mb-0">
                          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('messages.index') }}">
                              <i class="ci-bell opacity-60 me-2"></i>Messages
                          </a>
                      </li>
                  @endif
      
                  <li class="border-bottom mb-0">
                      <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('logout') }}">
                          <i class="ci-sign-out opacity-60 me-2"></i>Sign out
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      
      </aside>
</body>
</html>
