<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="frontend/template/nav.css"/>
    @yield('ajouts_header')
    <title>@yield('titre')</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="frontend/accueil/images/rocflogo.png" alt="Logo Image">
        </div>
        <div class="titreMobileDiv">
            <a class="titreMobile" href="{{route('accueil')}}">ROCF</a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="listeLiens"><a class="listeLiens" href="{{route('mission')}}">Notre Mission</a></li>
            <li class="listeLiens"><a href="#">Tables de Concertation</a></li>
            <a class="titreNav" href="{{route('accueil')}}">ROCF</a>
            <li class="listeLiens"><a href="{{route('partenaires')}}">Nos Partenaires</a></li>
            <li class="listeLiens"><a href="#">À Propos</a></li>
            <li class="listeBouton"><a class="login-button" href="{{route('connexion')}}">Espace Membre</a></li>
        </ul>
    </nav>
    <script src="frontend/template/nav.js"></script>

    @yield('contenu')

</body>
</html>
