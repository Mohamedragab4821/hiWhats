<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!-- Include your CSS files here -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        /* Navbar styling */
        .navbar {
            display: flex;
            padding: 1rem;
            background-color: #ffffff; /* White background */
            border-bottom: 1px solid #e0e0e0; /* Light border */
        }
        .navbar-content {
            width: 80%;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }
        .img-thumbnail {
            width: 7.375rem;
            height: 7.375rem;
            overflow: hidden;
            border-radius: 100%;
            margin-right: 1rem;
        }
        .img-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .navbar-text {
            color: #333; /* Dark text color */
        }
        .navbar-text span {
            color: #777; /* Lighter text color for joined date */
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="img-thumbnail">
                <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('img/nft/vendor/avatar.png') }}" alt="{{ Auth::user()->user_name }}">
            </div>
            <div class="navbar-text">
                <h3 class="h5 mb-2">{{ Auth::user()->user_name }}</h3>
                <span>Joined {{ Auth::user()->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    </nav>
    
    <!-- Include your JS files here -->
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var wa_btnSetting = {
            "btnColor": "#16BE45",
            "ctaText": "WhatsApp Us",
            "cornerRadius": 40,
            "marginBottom": 100,
            "marginLeft": 20,
            "marginRight": 20,
            "btnPosition": "right",
            "whatsAppNumber": "+201283370658",
            "welcomeMessage": "Hello",
            "zIndex": 999999,
            "btnColorScheme": "light"
        };
        var wa_widgetSetting = {
            "title": "فكره",
            "subTitle": "Typically replies in a day",
            "headerBackgroundColor": "#FBFFC8",
            "headerColorScheme": "dark",
            "greetingText": "Hi there! \nHow can I help you?",
            "ctaText": "Start Chat",
            "btnColor": "#1A1A1A",
            "cornerRadius": 40,
            "welcomeMessage": "Hello",
            "btnColorScheme": "light",
            "brandImage": "https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png",
            "darkHeaderColorScheme": {
                "title": "#333333",
                "subTitle": "#4F4F4F"
            }
        };
        window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
        };
    </script>
</body>
</html>
