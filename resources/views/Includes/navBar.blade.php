<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!-- Include your CSS files here -->
    <style>
        /* Add inline CSS for centering */
        .navbar {
            display: flex;
            /* justify-content: center; */
            /* align-items: center; */
            padding: 1rem;
            background-color: #f8f9fa; /* Example background color */

        }
        .navbar-content {
          width: 80%;
          margin: 0 auto;
            /* display: flex; */
            /* align-items: center; */
            /* text-align: center; */
        }
        .img-thumbnail {
            width: 7.375rem;
            height: 7.375rem;
            overflow: hidden;
        }
        .img-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <nav style="margin-bottom: 20px" class="navbar bg-accent">
        <div class="navbar-content">
            <div class="d-flex align-items-center">
                <div class="img-thumbnail rounded-circle flex-shrink-0 ms-3">
                    <img class="rounded-circle"
                         src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('img/nft/vendor/avatar.png') }}"
                         alt="{{ Auth::user()->user_name }}">
                </div>
                <div class="ps-3">
                    <h3 class="h5 mb-2 text-light">{{ Auth::user()->user_name }}</h3>
                    <span class="d-block text-light fs-sm opacity-60">Joined {{ Auth::user()->created_at->format('M d, Y') }}</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Include your JS files here -->
    <script src="path/to/your/js/scripts.js"></script> <!-- Example path -->
</body>
</html>
