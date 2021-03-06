<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <!-- GOOGLE FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">   
    <title>Pasākumunators9000</title>
</head>

<body>
    <x-header-comp />
    <x-navbar-comp />
    
    <aside>
        <!-- left -->
    </aside>
    
    <div id="parent-preview-pasakums">
        <div id="pasakums-preview" class="mainpage-content">
            <h3 id="tituls-pasakums">TITULS</h3>
                <div id="saturs-par-pasakumu">
                    <p>
                    

                    </p>
                    <button id="atteli-button">Attēli</button> <!-- Parādītu attēlus dotajam projektam -->
                </div>
        </div>
        <div id="komentari">
            <h3 id="tituls-komentari">KOMENTĀRI</h3>
            <div id="saturs-par-komentariem">
                <ul>
                    <li id="pirmais-preview-koments" class="preview-komentari">1.komentars</li>
                    <li id="pirmais-preview-koments" class="preview-komentari">1.komentars</li>
                    <li id="pirmais-preview-koments" class="preview-komentari">1.komentars</li>
                </ul>
        </div>
        </div>
    </div>
    <aside>
        <!-- right -->
    </aside>
    
    <!-- <x-footer-comp /> -->
    <footer id="footer">
        <p>Veidoja: Askolds Bērziņš, Johans Justs Eris, Aleksejs Romaņuks</p>
        <p>&copy Copyright AskoldsJustsAleksejs inc.</p>
    </footer>
</body>
</html>