<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CPMS - Haute Luxury Cosmetics</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&family=Playfair+Display:ital,wght@1,400;1,500&display=swap" rel="stylesheet">

        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: radial-gradient(circle at top right, #FCFAF7 0%, #F5ECE5 60%, #EFE3DA 100%);
                color: #1A1412;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow-x: hidden;
            }
            
            header {
                width: 100%;
                max-width: 1300px;
                margin: 0 auto;
                padding: 40px 24px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .brand-logo {
                font-family: 'Cinzel', serif;
                font-size: 28px;
                font-weight: 500;
                letter-spacing: 5px;
                color: #1A1412;
                text-shadow: 0 2px 4px rgba(0,0,0,0.02);
                cursor: default;
                line-height: 1.2;
            }
            .brand-logo span {
                display: block;
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-size: 8px;
                text-transform: uppercase;
                color: #A37547; 
                letter-spacing: 2px;
                margin-top: 4px;
                font-weight: 500;
            }
            
            nav {
                display: flex;
                align-items: center;
                gap: 40px;
            }
            nav a {
                text-decoration: none;
                color: #3A302B;
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 2px;
                position: relative;
                transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            }
            nav a::after {
                content: '';
                position: absolute;
                width: 0;
                height: 1px;
                bottom: -6px;
                left: 50%;
                transform: translateX(-50%);
                background-color: #C59B6D;
                transition: width 0.3s ease;
            }
            nav a:hover {
                color: #C59B6D;
                letter-spacing: 2.5px; 
            }
            nav a:hover::after {
                width: 80%;
            }
            
            .btn-login {
                padding: 10px 15px;
                text-transform: uppercase;
            }
            .btn-dark {
                background: #1A1412;
                color: #ffffff !important;
                padding: 14px 32px;
                border-radius: 0px; 
                font-family: 'Cinzel', serif;
                font-size: 11px !important;
                font-weight: 600;
                letter-spacing: 2px;
                border: 1px solid #1A1412;
                box-shadow: 0 5px 20px rgba(0,0,0,0.07);
                transition: all 0.4s ease;
            }
            .btn-dark:hover {
                background-color: transparent;
                color: #1A1412 !important;
                border-color: #1A1412;
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            }
            .btn-dark::after {
                display: none;
            }

            
            main {
                width: 100%;
                max-width: 1300px;
                margin: 10px auto 50px auto;
                padding: 0 24px;
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 80px;
                flex: 1;
            }
            .content-area {
                width: 45%;
                display: flex;
                flex-direction: column;
                gap: 25px;
            }
            
            .badge {
                align-self: flex-start;
                font-size: 9px;
                font-weight: 600;
                letter-spacing: 3px;
                text-transform: uppercase;
                color: #ffffff;
                background: linear-gradient(135deg, #C59B6D 0%, #946B44 100%);
                padding: 8px 20px;
                border-radius: 0px;
                box-shadow: 0 4px 15px rgba(197, 155, 109, 0.2);
            }
            
            h1 {
                font-family: 'Cinzel', serif;
                font-size: 42px;
                font-weight: 400;
                line-height: 1.3;
                color: #1A1412;
                letter-spacing: 1px;
            }
            h1 span {
                font-family: 'Playfair Display', serif;
                font-style: italic;
                font-weight: 400;
                color: #A37547;
                letter-spacing: 0px;
                display: inline-block;
            }
            p {
                font-size: 14px;
                color: #5A4E47;
                line-height: 1.8;
                max-width: 480px;
                font-weight: 300;
            }
            
            .btn-cta {
                display: inline-block;
                align-self: flex-start;
                background: linear-gradient(135deg, #1A1412 0%, #2A211D 100%);
                color: #ffffff !important;
                border: 1px solid #1A1412;
                padding: 18px 44px;
                border-radius: 0px; 
                font-family: 'Cinzel', serif;
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 3px;
                text-decoration: none;
                box-shadow: 0 15px 35px rgba(26, 20, 18, 0.15);
                transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
                margin-top: 15px;
                position: relative;
                overflow: hidden;
            }
            .btn-cta:hover {
                background: linear-gradient(135deg, #C59B6D 0%, #946B44 100%);
                border-color: #C59B6D;
                transform: translateY(-4px) scale(1.02);
                box-shadow: 0 20px 40px rgba(197, 155, 109, 0.3);
            }

            .image-area {
                width: 55%;
                height: 560px;
                border-radius: 0px; 
                overflow: hidden;
                position: relative;
                border: 1px solid rgba(197, 155, 109, 0.4); 
                padding: 12px; 
                background: transparent;
                box-shadow: 0 30px 70px rgba(26, 20, 18, 0.12);
                transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            }
            .image-inner {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: relative;
            }
            .image-area img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
            }
            
            .image-area:hover {
                transform: translateY(-6px);
                border-color: #C59B6D;
                box-shadow: 0 40px 80px rgba(148, 107, 68, 0.2);
            }
            .image-area:hover img {
                transform: scale(1.04);
            }

            footer {
                width: 100%;
                text-align: center;
                padding: 35px;
                font-family: 'Cinzel', serif;
                font-size: 10px;
                color: #8C7B73;
                text-transform: uppercase;
                letter-spacing: 3px;
                border-top: 1px solid rgba(197, 155, 109, 0.15);
                background: rgba(252, 250, 247, 0.5);
            }

            @media (max-width: 1200px) {
                h1 { font-size: 36px; }
                .image-area { height: 480px; }
            }
            @media (max-width: 768px) {
                header { flex-direction: column; gap: 25px; text-align: center; padding: 30px 20px; }
                main { flex-direction: column; text-align: center; margin-top: 20px; gap: 50px; }
                .content-area, .image-area { width: 100%; }
                .badge, .btn-cta { align-self: center; }
                .image-area { height: 380px; padding: 8px; }
                p { max-width: 100%; }
                nav { flex-wrap: wrap; justify-content: center; gap: 20px; }
            }
        </style>
    </head>
    <body>

        <header>
            <div class="brand-logo">
                CPMS <span>HIGH-END PRODUCT CONTROL <br> BEYOND BEAUTY MANAGEMENT</span>
            </div>

            @if (Route::has('login'))
                <nav>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('team') }}">Team Members</a>
                    <a href="{{ route('features') }}">Features</a>

                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-dark">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-dark">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main>
            <div class="content-area">
                <div class="badge">✨ ELITE INVENTORY CONTROL</div>
                
                <h1>REDEFINING <br>LUXURY SYSTEMS IN <br><span>BEAUTY MANAGEMENT</span></h1>
                
                <p>Welcome to the Cosmetics Product Management System (CPMS). Step into a realm of luxury inventory control, managing premium suppliers, and curating beauty lines with unrivaled professional precision.</p>

                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-cta">Go To Dashboard →</a>
                @else
                    <a href="{{ route('register') }}" class="btn-cta">GET STARTED NOW →</a>
                @endauth
            </div>

            <div class="image-area">
                <div class="image-inner">
                    <img src="{{ asset('hero.png') }}" alt="Premium Cosmetics">
                </div>
            </div>
        </main>

        <footer>
            &copy; {{ date('Y') }} CPMS Project. Crafted for Professional Aesthetics.
        </footer>

    </body>
</html>