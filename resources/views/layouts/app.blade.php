<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>DC</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">   

    </head>
    <body>
        
        <header>
            <section>
                <nav>
                    <div class="nav-top">
                        <div class="container">
                                <div class="info-top">
                                    <span>DC POWER VISA</span>
                                    <span>ADDITIONAL DC SITES <i class="fas fa-sort-down"></i></span>
                                </div>
                        </div>
                    </div>
                    <div class="nav-bottom">
                        <div class="container">
                            <div class="info-bottom">
                                <img src="./images/dc-logo.png" alt="">
                                <ul>
                                    <li><a href="">characters</a></li>
                                    <li class="active" ><a class="active" href="">comics</a></li>
                                    <li><a href="">movies</a></li>
                                    <li><a href="">tv</a></li>
                                    <li><a href="">games</a></li>
                                    <li><a href="">collectibles</a></li>
                                    <li><a href="">videos</a></li>
                                    <li><a href="">fans</a></li>
                                    <li><a href="">news</a></li>
                                    <li><a href="">shop <i class="fas fa-sort-down"></i></a></li>
                                </ul>
                                <span class="search">Search <i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="jumbo">
                <div class="container-jumbo"></div>
            </section>
        </header>
        <main>
             @yield('main')
        </main>
        <footer>
            <section>
                <div class="footer-top">
                    <div class="container">
                        <div class="left-container">
                            <div class="ul-left">
                                <div>
                                <ul>
                                    <li>dc comics</li>
                                    <li><a href="">Characters</a></li>
                                    <li><a href="">Comics</a></li>
                                    <li><a href="">Movies</a></li>
                                    <li><a href="">TV</a></li>
                                    <li><a href="">Games</a></li>
                                    <li><a href="">Videos</a></li>
                                    <li><a href="">News</a></li>
                                </ul>
                                <ul>
                                    <li>shop</li>
                                    <li><a href="">Shop DC</a></li>
                                    <li><a href="">Shop DC Collectibles</a></li>
                                </ul>
                                </div>
                               
                                <ul>
                                    <li>dc </li>
                                    <li><a href="">Terms Of Use</a></li>
                                    <li><a href="">Privacy policy(New)</a></li>
                                    <li><a href="">Ad Choices</a></li>
                                    <li><a href="">Advertising</a></li>
                                    <li><a href="">Jobs</a></li>
                                    <li><a href="">Subscriptions</a></li>
                                    <li><a href="">Talent Workshops</a></li>
                                    <li><a href="">CPSC Certificates</a></li>
                                    <li><a href="">Rating</a></li>
                                    <li><a href="">Shop Help</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                                <ul>
                                    <li>sites </li>
                                    <li><a href="">DC</a></li>
                                    <li><a href="">MAD Magazine</a></li>
                                    <li><a href="">DC Kids</a></li>
                                    <li><a href="">DC Universe</a></li>
                                    <li><a href="">DC Power Visa</a></li>
                                </ul>
                            </div>
                            <p>All site Content TM 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved. <span>Cookies Settings</span> </p>
                        </div>
                        <div class="right-container">
                            <img src="./images/dc-logo-bg-Copia.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <a href="">Sign-up now!</a>
                        <div class="right-footer">
                        <span>follow us</span>
                        <div class="icons">
                            <img src="./images/footer-facebook.png" alt="">
                            <img src="./images/footer-twitter.png" alt="">
                            <img src="./images/footer-youtube.png" alt="">
                            <img src="./images/footer-pinterest.png" alt="">
                            <img src="./images/footer-periscope.png" alt="">
                        </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </footer>   



    </body>
</html>
