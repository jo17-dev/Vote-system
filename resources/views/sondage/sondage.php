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
            <h2>Dashboard</h2>
            <!-- <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div> -->
        </div>
        <div class="sub-content">
            <!-- les diferrents sujets ou candidats de vote -->
            <div class="subject">
                <div class="box" style="background-color: #f44336" >
                    <div class="box-header">
                        <p>72</p>
                    </div>
                    <div class="box-footer">
                        <p> (titre) 1</p>
                    </div>
                </div>
                <div class="box" style="background-color: var(--blue)">
                    <div class="box-header">
                        <p>48</p>
                    </div>
                    <div class="box-footer">
                        <p>   (titre) 2</p>
                    </div>
                </div>
                <div class="box" style="background-color: #009688">
                    <div class="box-header">
                        <p>48</p>
                    </div>
                    <div class="box-footer">
                        <p>   (titre) 3</p>
                    </div>
                </div>
                <div class="box" style="background-color: #ff9800">
                    <div class="box-header">
                        <p>48</p>
                    </div>
                    <div class="box-footer">
                        <p>   (titre) 4</p>
                    </div>
                </div>
            </div>

            <div class="subject">
            <p>profil du  candidat </p><p>Details du vote</p>
            </div>
            <div class="subject">
                <div class="profil">
                    
                    <img src="../img/avatar2.png" alt="2nd avatar" width=250>
                </div>
                <div class="data">
                <table id="data">
                    <tr>
                        <td>Martin</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Abdoul</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Rene</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>kengne</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>kamto</td>
                        <td>32</td>
                    </tr>
                    <tr>
                        <td>Anguissa</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>Rigobert</td>
                        <td>2</td>
                    </tr>
  
                </table>
                </div> 
            </div>
            <div class="subject">
                <p>Statistiques Generale</p>
            </div>
            <div class="box2">
            <p class="etat">vote positif</p>
            <!-- <progress value="25" max="100"> 25% </progress> -->

            <!-- ici les bars de progressions  -->
            <div class="progress">
                <div class="bar" style=" width:25%"><p>25%</p></div>
            </div>
            <p class="etat">vote neutre</p>
            <div class="progress">
                <div class="bar" style="background: #ff9800; width:50%"><p>50%</p></div>
            </div>
            <p class="etat">vote negatif</p>
            <div class="progress" >
                <div class="bar" style="background: #f44336; width:75%"><p>75%</p></div>
            </div>
            </div>

            <div class="subject">
            <p>Resultat finale du vote (titre)</p>
            </div>
            <div class="subject">
            <table id="data2">
                    <tr>
                        <td>Martin</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Abdoul</td>
                        <td>8% </td>
                    </tr>
                    <tr>
                        <td>Rene</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td>kengne</td>
                        <td>4%</td>
                    </tr>
                    <tr>
                        <td>kamto</td>
                        <td>32%</td>
                    </tr>
                    <tr>
                        <td>Anguissa</td>
                        <td>18%</td>
                    </tr>
                    <tr>
                        <td>Rigobert</td>
                        <td>2%</td>
                    </tr>
  
                </table>
            </div>
            <div class="subject">
            <p>Echeance avant la fin des votes</p> <br> <?php  echo"<p>".date("y-m-d")."</p>"; ?>
            </div>
           
        </div>
    </div>

</body>
</html>