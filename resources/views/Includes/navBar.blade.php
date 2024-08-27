<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
          <div class="d-flex align-items-center">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;">
              <img class="rounded-circle" 
                   src="{{ Auth::user()->profile_pic ? asset('storage/' . Auth::user()->profile_pic) : asset('img/nft/vendor/avatar.png') }}" 
                   alt="{{ Auth::user()->name }}">
            </div>
            <div class="ps-3">
              <h3 class="h5 mb-2 text-light">{{Auth::user()->user_name}}</h3><span class="d-block text-light fs-sm opacity-60">Joined {{Auth::user()->created_at}}</span>
            </div>
          </div>
          
        </div>
      </div>
</body>
</html>