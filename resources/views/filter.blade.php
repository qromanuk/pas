<!DOCTYPE html>
<html lang="lv">
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
    
    <title>Filters</title>
</head>
<body>
    <x-header-comp />
    <x-navbar-comp />
    <!-- COMPONENTS COULD BE CHANGED -->
    <div id="filter-content-group">
        <div id="filter-pasakumu" class="filter-content-child">
            <x-filter-comp />
        </div>

        <div id="show-filter-list" class="filter-content-child">
            <x-show-list-comp />
        </div>
    </div>
    
    <!-- <x-footer-comp /> -->
    <footer id="footer">
        <p>Veidoja: Askolds Bērziņš, Johans Justs Eris, Aleksejs Romaņuks</p>
        <p>&copy Copyright AskoldsJustsAleksejs inc.</p>
    </footer>
</body>
</html>