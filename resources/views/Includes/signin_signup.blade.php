<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
              </ul>
              <img src="" alt="">
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
              <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab" action="{{ route('signin') }}" method="POST">
                  @csrf
                <div class="mb-3">
                  <label class="form-label" for="si-email">Email address</label>
                  <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required name="email">
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="si-password">Password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="si-password" required name="password">
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3 d-flex flex-wrap justify-content-between">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="si-remember">
                    <label class="form-check-label" for="si-remember">Remember me</label>
                  </div><a class="fs-sm" href="#">Forgot password?</a>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
              </form>
              <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" action="{{ route('Registeration') }}" method="POST">
                  @csrf
                <div class="mb-3">
                  <label class="form-label" for="su-name">Full name</label>
                  <input class="form-control" type="text" id="userName" name="userName" placeholder="John Doe" required>
                  <div class="invalid-feedback">Please fill in your name.</div>
                </div>
                <div class="mb-3">
                  <label for="su-email">Email address</label>
                  <input class="form-control" type="email" id="email" name="email" placeholder="johndoe@example.com" required>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="su-password">Password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="password" name="password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="su-password-confirm">Phone Number</label>
                  <div class="password-toggle">
                    <input class="form-control" type="text" id="phone" name="phone" required>
                    <label class="password-toggle-btn">
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
