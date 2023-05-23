<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="voteForm.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.min.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <img src="../img/logo1.png" alt="logo">
                <h3>Myvoice.</h3>
            </div>
            <div class="links">
                <ul>
                    <li> <a href=""> <i class="fa-solid fa-circle-info fa-xl"></i></a> </li>
                    <li> <a href=""> <i class="fa fa-user fa-xl"></i> </a> </li>
                    <li> <a href=""> <i class="fa-solid fa-power-off fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
   </header>

   <div class="sidenav">
        <img src="../img/avatar3.png" alt="" class="avatar"> <hr>
        <a href="actualite.php">Actualite</a>
        <a href="voteForm.php">Vote simple</a>
        <a href="candidateForm.php">Vote de candidat</a>
        <a href="sondage.php">Sondage de vote</a>
    </div>

    <div class="content">
        <div class="content-header">
            <h2>Actualite</h2>
            <!-- <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div> -->
        </div>
        <div class="sub-content">
            <input type="text" name="search" class="search" placeholder="Search..">

            <div class="journal">
                <div class="rows">
                    <div class="col-15">
                        <i class="fa-solid fa-link"></i>
                    </div>
                <div class="col-80">
                    <h2>Titre 1</h2> <p> en cours ...</p> <hr>
                    <h4>nouveau vote</h4> 
                    <p style="display: flex">Copier et envoyer le lien: <a href=""> https://lienVersLaPagedeVote</a></p>
                    <p> <a href="#">voire plus</a></p> 
                </div>
                </div>
            </div>

            <div class="journal">
                <div class="rows">
                    <div class="col-15">
                        <i class="fa-solid fa-link"></i>
                    </div>
                <div class="col-80">
                    <h2>Titre 2</h2> <p> Fin du vote ....</p> <hr>
                    <h4>nouveau vote</h4> 
                    <p style="display: flex">Copier et envoyer le lien: <a href=""> https://lienVersLaPagedeVote</a></p>
                    <p> <a href="#">voire plus</a></p> 
                </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>