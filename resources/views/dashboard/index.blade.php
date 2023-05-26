<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/dashboard/style-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome/css/all.css') }}">
</head>
<body>
    <div class="container2">
    <header>
        <div class="container">
            <div class="logo">
                <img src="../img/logo1.png" alt="logo">
                <h3>Myvoice.</h3>
            </div>
            <div class="links">
                <ul>
                    <li> <a href="#"> <i class="fa-solid fa-circle-info fa-xl"></i></a> </li>
                    <li> <a href="#"> <i class="fa fa-user fa-xl"></i> </a> </li>
                    <li> <a href="{{ route('home.logout') }}"> <i class="fa-solid fa-power-off fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
   </header>

   <h1>Bienvenue  {{  $LoggedUser['nom']}}...</h1>
   <!-- <button class="btn">  Nouveau scrutin </button>  -->
    <hr>
        <div class="row">
                <a href="../vote_form/voteForm.php"> 
                    <div class="box"> 
                        <h4> creer un vote simple  </h4>
                        <p> Prenez des descisions collectives en toute simplicite. </p>
                    </div>
                </a>
                <a href="../vote_form/candidateForm.php">
                    <div class="box">
                        <h4> Creer un vote de candidat</h4>
                        <p> Decidez du choix d'un representant par la democratie </p>
                    </div>
                </a>
        </div>
        <div class="row">
            <a href="{{ url('/dashboard/actualite') }}">
                <div class="box">
                     <h4> File d'actualite </h4> 
                     <p> visitez tous les votes en cour.  </p>
                </div>
            </a>
            <a href="../vote_form/sondage.php">
                <div class="box">
                     <h4> Sondage </h4>
                     <p> visitez visitez les sondage des votes en cour </p>
                </div>
            </a>
        </div>  
        <div class="circle"></div>
        <!-- <div class="foot"><img src="../img/shape.jpg" alt="image du footer" class="shape"></div> -->
    </div>
      
   
</body>
</html>