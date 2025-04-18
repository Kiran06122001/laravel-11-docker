<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendzi - Explore Your Offers</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        
        @font-face {
            font-family: 'Sansation';
            src: url('fonts/Sansation_Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        
        @font-face {
            font-family: 'Sansation';
            src: url('fonts/Sansation_Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        
        @font-face {
            font-family: 'Sansation';
            src: url('fonts/Sansation_Italic.ttf') format('truetype');
            font-weight: normal;
            font-style: italic;
        }
        
        @font-face {
            font-family: 'Sansation';
            src: url('fonts/Sansation_Bold_Italic.ttf') format('truetype');
            font-weight: bold;
            font-style: italic;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Sansation', 'Roboto', sans-serif;
        }
        
        body {
            background-color: #F8F8F8;
        }
        
        .header {
            background-color: #013945;
            height: 80px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
        }
        
        .login-btn {
            background-color: #21C589;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 120px;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo {
            height: 34px;
            display: flex;
            align-items: center;
        }
        
        .logo-text {
            color: white;
            font-size: 24px;
            margin-left: 10px;
            font-weight: bold;
        }
        
        .main-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .page-title {
            font-size: 32px;
            font-weight: bold;
            color: #333333;
            margin-top: 30px;
        }
        
        .attributes-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .attributes-title {
            font-size: 16px;
            font-weight: bold;
            color: #555555;
            margin-right: 20px;
        }
        
        .attribute-list {
            display: flex;
            gap: 40px;
        }
        
        .attribute-item {
            display: flex;
            align-items: center;
        }
        
        .circle {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: #8A56E2;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .circle-red {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: #883A3A;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .attribute-text {
            font-size: 16px;
            color: #555555;
        }
        
        .card {
            background-color: #E8FAE8;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            position: relative;
        }
        
        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }
        
        .recommendation {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }
        
        .recommendation-with-attribute {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }
        
        .recommendation-with-attribute .attribute-item {
            margin-left: 30px;
        }
        
        .card-content {
            font-size: 16px;
            color: #333333;
            margin: 15px 0;
            line-height: 1.5;
        }
        
        .pro-banner {
            background-color: #333333;
            border-radius: 4px;
            color: white;
            padding: 15px 20px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .star {
            color: #F0AD4E;
            font-size: 18px;
            margin-right: 10px;
        }
        
        .pro-text {
            color: #F0AD4E;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .banner-content {
            display: flex;
            align-items: center;
        }
        
        .included {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .dropdown {
            margin-left: 5px;
            color: #F0AD4E;
        }
        
        .product-box {
            background-color: white;
            border: 1px solid #DDDDDD;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        
        .product-content {
            display: flex;
            gap: 25px;
        }
        
        .product-image {
            width: 110px;
            height: 90px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 4px;
            flex-shrink: 0;
        }
        
        .product-info {
            flex: 1;
        }
        
        .product-text {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
            line-height: 1.5;
        }
        
        .pro-feature {
            background-color: #333333;
            border-radius: 4px;
            color: white;
            padding: 15px 20px;
            margin-top: 20px;
            width: 500px;
            display: flex;
            align-items: center;
        }
        
        .btn-box {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: flex-end;
            margin-left: auto;
        }
        
        .primary-btn {
            background-color: #21C589;
            border: none;
            color: white;
            padding: 15px 20px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            width: 150px;
            text-align: center;
        }
        
        .site-info {
            font-size: 12px;
            color: #777777;
            text-align: center;
            margin: 10px auto auto;
        }
        
        .divider {
            height: 1px;
            background-color: #DDDDDD;
            margin: 30px 0;
            width: 100%;
        }
        
        .card-simple {
            margin-top: 20px;
        }
        
        .footer {
            height: 1px;
            background-color: #DDDDDD;
            margin-top: 30px;
        }
        
        /* Mobile Styles */
        @media (max-width: 768px) {
            .header {
                padding: 0 20px;
            }
            
            .attributes-container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .attributes-title {
                margin-bottom: 10px;
                margin-right: 0;
            }
            
            .attribute-list {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }
            
            /* Fix for recommendation in mobile */
            .recommendation-with-attribute {
                display: block;
            }
            
            .recommendation-with-attribute .circle-red {
                display: inline-block;
                vertical-align: middle;
                margin-bottom: 5px;
            }
            
            .recommendation-with-attribute > .attribute-text {
                display: inline-block;
                vertical-align: middle;
                margin-bottom: 5px;
            }
            
            .recommendation-with-attribute .attribute-item {
                margin-left: 0;
                margin-top: 5px;
                /* display: block; */
            }
            
            /* Fix for PRO MEMBER banner in mobile */
            .pro-banner {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .banner-content {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .star {
                display: inline-block;
                margin-bottom: 5px;
            }
            
            .pro-text {
                display: block;
                margin-bottom: 5px;
            }
            
            .included {
                align-self: flex-start;
                margin-top: 10px;
                /* margin-left: 28px; */
            }
            
            .product-content {
                flex-direction: column;
            }
            
            .product-image {
                width: 100%;
                height: 120px;
            }
            
            .btn-box {
                align-items: center;
                margin-left: 0;
                margin-top: 15px;
                width: 100%;
            }
            
            .primary-btn {
                width: 100%;
                max-width: 200px;
            }
            
            .pro-feature {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="images/lendzi_logo.svg" alt="Lendzi Logo" height="34">
        </div>
        <button class="login-btn">Login</button>
    </header>

    <div class="main-content">
        <h1 class="page-title">Explore Your Offers</h1>
        
        <div class="attributes-container">
            <h2 class="attributes-title">Your Attributes</h2>
            <div class="attribute-list">
                <div class="attribute-item">
                    <div class="circle"></div>
                    <span class="attribute-text">Credit Score: 700-719</span>
                </div>
                <div class="attribute-item">
                    <div class="circle"></div>
                    <span class="attribute-text">Time in Business: 11 months</span>
                </div>
                <div class="attribute-item">
                    <div class="circle"></div>
                    <span class="attribute-text">Annual revenue: $96,000</span>
                </div>
            </div>
        </div>

        <!-- First Card -->
        <div class="card">
            <h2 class="card-title">Operating as an unincorporated business? Consider incorporating.</h2>
            
            <div class="recommendation-with-attribute">
                <div class="circle-red"></div>
                <span class="attribute-text">We recommend this for</span>
                <div class="attribute-item">
                    <div class="circle"></div>
                    <span class="attribute-text">Time in Business: 11 months</span>
                </div>
            </div>
            
            <p class="card-content">
                Incorporation can unlock more funding options and better credit cards, but it also protects you personally. Incorporate today to protect against liability and prepare for the future.
            </p>
            
            <div class="pro-banner">
                <div class="banner-content">
                    <span class="pro-text"> ★ PRO MEMBER EXCLUSIVE</span>
                    <span>Get $700+ in discounts and rewards on products you need.</span>
                </div>
                <div class="included">
                    <span>What's Included?</span>
                    <span class="dropdown">▾</span>
                </div>
            </div>
            
            <div class="product-box">
                <div class="product-content">
                    <div class="product-image" style="background-image: url('images/Finder.png');"></div>
                    <div class="product-info">
                        <p class="product-text">Get worry-free services and support to launch your business starting at $0 plus state fees.</p>
                        
                        <div class="pro-feature">
                            <div style="display: flex; flex-direction: column;">
                                <span style="color: #F0AD4E; font-weight: bold; font-size: 14px;">PRO MEMBER EXCLUSIVE</span>
                                <span style="color: white; font-size: 14px; margin-top: 5px;">50% discount on the Registered Agent Service in year one</span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button class="primary-btn">START NOW</button>
                        <div class="site-info">on ZenBusiness's<br>secure site</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <!-- Second Card -->
        <div class="card-simple">
            <h2 class="card-title">Sort your finances with professional guidance.</h2>
            
            <div class="recommendation-with-attribute">
                <div class="circle-red"></div>
                <span class="attribute-text">We recommend this for</span>
                <div class="attribute-item">
                    <div class="circle"></div>
                    <span class="attribute-text">Time in Business: 11 months</span>
                </div>
            </div>
            
            <p class="card-content">
                Having your business and personal finances reviewed by a small business expert may set you up for success.
            </p>
            
            <div class="pro-banner">
                <div class="banner-content">
                    <span class="pro-text">★ PRO MEMBER EXCLUSIVE</span>
                    <span>Upgrade to access this feature.</span>
                </div>
            </div>
            
            <div class="product-box">
                <div class="product-content">
                    <div class="product-image" style="background-image: url('images/Finder.png');"></div>
                    <div class="product-info">
                        <p class="product-text">Get a free 45-minute video call with a Certified Financial Planner™ small business expert.</p>
                    </div>
                    <div class="btn-box">
                        <button class="primary-btn">LEARN MORE</button>
                        <div class="site-info">about NerdWallet<br>Business Pro</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer"></div>
    </div>
    
    <!-- 
    Analysis of the issue:
    The main issue was with mobile responsiveness for specific elements:
    
    1. In the original SVG, text elements have fixed positions which work for desktop
       but don't adapt well to mobile screens.
    
    2. The PRO MEMBER EXCLUSIVE banner needed specific mobile styling to properly
       stack and align elements.
    
    3. The "We recommend this for" section with the Time in Business attribute
       needed to be displayed as separate bullet points on mobile while appearing
       on the same line for desktop.
    
    The solution implements:
    - Desktop-specific layout with flex alignment for horizontal arrangement
    - Mobile-specific CSS that overrides the desktop layout to create proper stacking
    - Proper font loading with @font-face declarations
    - Correct image paths and styling
    -->
</body>
</html>