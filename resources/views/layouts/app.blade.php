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
        </header>
        <main>
             @yield('main')
        </main>
        <footer>

        </footer>   



    </body>
</html>
