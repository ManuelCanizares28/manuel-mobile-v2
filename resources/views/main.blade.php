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
    <link rel="stylesheet" href="{{ asset('css/shoe-design.css') }}">
</head>
<body>
    <header>
            <div class="menu">
                <img src="{{ asset('icons/logo.svg') }}" alt="logo">
                <img class="open-menu" src="{{ asset('icons/menu.svg') }}" alt="logo">
                <img class="close-menu" src="{{ asset('icons/close.svg') }}" alt="logo">
            </div>
            <div class="container-header">
                <nav class="menu-header">
                    <ul>
                        <div id="menu-products" class="menu-content">
                        <a class="a-header" href="#">Products</a>
                        <img class="chevron-down" src="{{ asset('icons/chevron-down.svg') }}" alt="logo">
                        </div>
                        <div class="dropdown-products">
                            <a class="production-products" href="#">Shoe pattern making and production</a>
                            <a class="modeling-products" href="#">3D Shoe modeling</a>
                            <div class="shoe-design">
                            <a class="shoe-design-a" href="#">2D/3D Integrated shoe design</a>
                            <img class="close-design" width="12px" src="{{ asset('icons/close.svg') }}" alt="logo">
                            </div>
                            <div class="dropdown-design">
                                <div class="design-container">
                                    <img width="80px" src="{{ asset('icons/icad-evolve.svg') }}" alt="logo">
                                    <a href="#">SOFTWARE</a>
                                    <p>The first end-to-end software for footwear creation in an integrated and collaborative 2D/3D space.</p>
                                </div>

                                <div class="design-container">
                                    <img width="110px" src="{{ asset('icons/icad-workspace.svg') }}" alt="logo">
                                    <a href="#">CLOUD PLATFORM</a>
                                    <p>A collaborative cloud platform to share and manage your team's shoes, materials, lasts and outsoles models.</p>
                                </div>

                                <div class="design-container">
                                    <img width="120px" src="{{ asset('icons/icad-colorways.svg') }}" alt="logo">
                                    <a href="#">CLOUD PLATFORM</a>
                                    <p>Cloud platform to create customized models integrated into websites and e-commerce systems</p>
                                </div>

                                <div class="design-container">
                                    <img width="70px" src="{{ asset('icons/icad-last.svg') }}" alt="logo">
                                    <a href="#">SOFTWARE</a>
                                    <p>Specialized software for shoe last designing</p>
                                </div>

                                <div class="plugin-container">
                                    <a href="#">PLUGIN</a>
                                    <p>Plugin for Rhinoceros to design bottom shoe parts.</p>
                                </div>

                                <div class="design-container">
                                    <img width="140px" src="{{ asset('icons/icad-materials.svg') }}" alt="logo">
                                    <a href="#">HARDWARE</a>
                                    <p>Ultra high-definition materials scanner to scan any material for footwear 3d models.</p>
                                </div>
                            </div>
                            <a class="insole-products" href="#">Last and insole design</a>
                        </div>
                        <div id="menu-plans" class="menu-content">
                        <a class="a-header" href="#">Plans</a>
                        <img class="chevron-down-plans" src="{{ asset('icons/chevron-down.svg') }}" alt="logo">
                        </div>
                        <div class="dropdown-plans">
                            <a href="#">Icad for business</a>
                            <a href="#">Icad for education centers</a>
                            <a href="#">View all plans</a>
                        </div>
                        <div id="menu-explore" class="menu-content">
                        <a class="a-header" href="#">Learn & explore</a>
                        <img class="chevron-down-explore" src="{{ asset('icons/chevron-down.svg') }}" alt="logo">
                        </div>
                        <div class="dropdown-explore">
                            <a href="#">Icad for business</a>
                            <a href="#">Icad for education centers</a>
                        </div>
                        <a class="a-header" href="#">Support</a>
                    </ul>
                </nav>
                <a class="contact" href="#">Contact now</a>
    </header>

    <section class="cabecera">
        <h1>REVOLUTIONIZE YOUR FOOTWEAR CREATION PROCESSES</h1>
        <p>Our solutions are the industry's future. A more sustainable, efficient, innovative and simply superior way of creating and producing shoes.</p>
        <a class="about-cabecera" href="#">About Icad</a>
        <img width="312px" src="{{ asset('images/zpt-cabecera.png') }}" alt="logo">
        <div class="triangulo"></div>
    </section>

    <section class="explore">
        <nav class="menu-explore">
            <div class="explore-container">
            <ul>
                <li><a class="making-production" href="#ESP">Shoe pattern making and production</a></li>
                <li><a class="shoe-modeling" href="#ESP">3D Shoe modeling</a></li>
                <li><a class="shoe-creation" href="#ESP">2D/3D integrated shoe creation</a></li>
                <li><a class="insole-design" href="#ESP">Last and insole design</a></li>
            </ul>
            </div>
        </nav>
    <div class="main-container-explore">
        <div class="container-explore">
        <div class="icad-discovery">
            <div class="background-img">
                <img width="300px" src="{{ asset('images/zpt-explore-1.png') }} " alt="logo">
            </div>
            <img class="logo-container" src="{{ asset('icons/icad-discovery.svg') }}" alt="logo">
            <p>Software solution for technical footwear design and pattern making.</p>
            <div class="a-discovery">
            <a class="explore-a" href="#">Explore it</a>
            <img src="{{ asset('icons/logo-plus.svg') }}" alt="logo">
            </div>
        </div>

        <div class="icad-discovery">
            <div class="background-img">
                <img width="310px" src="{{ asset('images/zpt-explore-2.png') }}" alt="logo">
            </div>
            <img class="logo-container" src="{{ asset('icons/icad-nest-production.svg') }}" alt="logo">
            <p>Software for automatized and optimized shoe cutting production.</p>
            <div class="a-discovery">
                <a class="explore-a" href="#">Explore Icad Nest</a>
                <img src="{{ asset('icons/logo-plus.svg') }}" alt="logo">
            </div>
        </div>

        <div class="icad-discovery">
            <div class="background-img">
                <img width="300px" src="{{ asset('images/zpt-explore-3.png') }}" alt="logo">
            </div>
            <img class="logo-container" src="{{ asset('icons/icad-last.svg') }}" alt="logo">
            <p>Specialized software for shoe last designing.</p>
            <div class="a-discovery">
                <a class="explore-a" href="#">Explore Icad Last</a>
                <img src="{{ asset('icons/logo-plus.svg') }}" alt="logo">
            </div>
        </div>
        </div>
    </div>
    </section>

<script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>