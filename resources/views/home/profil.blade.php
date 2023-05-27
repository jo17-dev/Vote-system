<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/index/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome/css/all.css') }}">
</head>

<body>

    <div class="d1">
        <h2> Mon Profil </h2>
    </div>

    <div class="d2">
        <div class="d3">
            
                <img src="{{ asset('/img/avatar3.png') }}" alt="Votre profil" class="circ">
                <div class="cercle"><i class="fa-solid fa-user-pen fa-2xl"></i></div>
            
        </div>
    </div>

    <div class="d4">

        <a href="#">
            <div class="pr" style="border-top: 1px solid black;">
                Nom: {{ $LoggedUser['nom'] }}
            </div>
        </a>

        <a href="#">
            <div class="pr">
                email: {{ $LoggedUser['email'] }}
            </div>
        </a>

        <a href="#">
            <div class="pr">
                Mot de passe: {{ $LoggedUser['password'] }}
            </div>
        </a>

    </div>
</body>

</html>