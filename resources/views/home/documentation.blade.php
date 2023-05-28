@extends('vote.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vote/voteForm.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index/docu.css') }}">
@endsection

@section('nav-bar')
    @include('helpers.nav-bar')
@endsection

@section('content')
<div class="doc">
    <h2 id="welcome">BIENVENUE sur Myvoice.</h2>

    <ul>
        <br>
            <h3 id="presentation">Présentation du site</h3>
        <br>
        <p>
            Notre site vous permettra de créer facilement et de façon sécurisée, des systèmes vote pour toute prise de décision de grande et petite et moyenne importance. Grâce au site vous pourrez [...]. Vous disposerez d'un certain nombre de priviléges sur les votes que vous crérez faisant de vous leur administrateur. Vous pourrez décider des votants ainsi que des candidats, choisir les dates de début et de fin de vote ainsi que la date de sortie des résultats, et même supprimer un vote si vous le voulez, mais vous ne pourrez pas intervenir sur la tournure du vote et nombre de voix. Avant de pouvoir créer des votes, vous, futurs administrateurs devrez d'abord disposer d'un compte utilisateur.
        </p><br><br>

            <h3 id="creation">Connexion au compte et Créataion de vote</h3>
        <br>
        <p>
            Pour vous connecter à votre compte, vous devez vous rendre sur la page d'accueil et cliquer <span class="special">Se Connecter</span> puis renseignez les différents champs par votre e-mail, mot de passe.
        </p>

        <br><div class="screen"> <img src="" alt="Img1"> </div><br> <!-- image de connexion -->

        <p>
            Si vous ne disposez pas d'un compte vous pouvez en créé un en cliquant depuis la même page sur <span class="special"> S'INSCRIRE </span> et rensignez les différents champs.
        </p>
            
        <br><div class="screen"> <img src="" alt="Img1"> </div><br> <!-- image d'inscription -->
            
        <p>
            Après connexion vous pourrez choisissez l'option de vote qui vous convient puis informez les différents champs du titre du vote, des dates de début et fin, des options de vote ou des candidats[...] et cliquez sur <span class="special"> Submit </span>.
        </p>
            
        <br><div class="screen"> <img src="" alt="Img1"> </div><br> <!-- image de vote -->
            
        <p>
            Une fois cela fait, il sera mis à votre disposition un lien donnant directement sur la page de vote. Ce lien est destiné à être envoyé directement aux votants afin qu'il puissent faire leurs choix.
        </p>

            <br><div class="screen"> <img src="" alt="Img1"> </div><br> <!-- image de lien de vote -->
        
        <p>
            -   Si vous avez choisi un vote ouvert à tous, alors nous vous conseillons de partager votre lien via Facebook, Twitter et tout autres réseaux sociaux afin qu'un maximum de votants puisse participer.
        </p>
        <br>
        <p>
            -   S'il s'agit d'un vote d'ordre privé, vous déciderez vous même du mode d'envoi du lien; s'il sera manuel(fais par vous même) ou alors géré par le site. Si vous choisissez la seconde option il vous sera demander de fournir un document <span class="special"> .xlsx s</span> renseignant les numérosde téléphone de tous les votants. N'allez surtout pas partager le lien où il pourra être consulté par des personnes exclues au cadre de votre vote.        
        </p><br>

        <p>Pour créer directement un compte <a href="{{ route('dashboard') }}"> Cliquez ici. </a> </p> <br><br>

            <h3 id="soumission">Soumission d'un vote</h3>
        <br>
        <p>
            Pour pouvoir voter il n'y a pour seul moyen que le lien. Un fois redirigé sur notre site par celui-ci, faites votre choix parmi les options proposées et tapez sur "Valider". 
        </p>

        <br><div class="screen"> <img src="" alt="Img1"> </div><br> <!-- image de connexion -->
        
        <p>
            Une fois le vote effectuer, une confiramation de vote sera affichées et les dates de fin de vote et de sortit des résultats vous seront communiquées, il est possible que celles-ci coîncident. Les résultats seront consultables 20jours après leur sortie après quoi la page ne vote ne sera plus disponible, donc le lien plus valide.
        </p>
    </ul>

</div>
@endsection
