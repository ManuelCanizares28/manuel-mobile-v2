<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icad</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">
    <link rel="stylesheet" href="{{ asset('css/generic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
</head>
<body>
    <header>
        <nav class="nav">
            <div class="menu">
                <img src="{{ asset('icons/logo.svg') }}" alt="logo">
                <img src="{{ asset('icons/menu.svg') }}" alt="logo">
            </div>
        </nav>
    </header>

    <section class="cabecera">
        <h1>REVOLUTIONIZE YOUR FOOTWEAR CREATION PROCESSES</h1>
        <p>Our solutions are the industry's future. A more sustainable, efficient, innovative and simply superior way of creating and producing shoes.</p>
        <a href="#">About Icad</a>
        <img width="312px" src="{{ asset('images/zpt-cabecera.png') }}" alt="logo">
        <div class="triangulo"></div>
    </section>

    <section class="explore">
        <div class="menu-explore">
            <a href="#">Shoe pattern making and production</a>
            <a href="#">3D Shoe modeling</a>
            <a href="#">2D/3D integrated shoe creation</a>
            <a href="#">Last and insole design</a>
        </div>
        <div class="icad-discovery">
            <div class="background-img">
                <img src="{{ asset('images/zpt-explore-1.png') }} " alt="logo">
            </div>
            <img src="{{ asset('icons/icad-discovery.svg') }}" alt="logo">
            <p>Software solution for technical footwear design and pattern making.</p>
            <a class="explore-a" href="#">Explore it</a>
        </div>

        <div class="icad-nest-production">
            <div class="background-img">
                <img src="{{ asset('images/zpt-explore-2.png') }}" alt="logo">
            </div>
            <img src="{{ asset('icons/icad-nest-production.svg') }} " alt="logo">
            <p>Software for automatized and optimized shoe cutting production.</p>
            <a class="explore-a" href="#">Explore Icad Nest</a>
        </div>

        <div class="icad-last">
            <div class="background-img">
                <img src="{{ asset('images/zpt-explore-3.png') }}" alt="logo">
            </div>
            <img src="{{ asset('icons/icad-last.svg') }}" alt="logo">
            <p>Specialized software for shoe last designing.</p>
            <a class="explore-a" href="#">Explore Icad Last</a>
        </div>
    </section>
</body>
</html>