<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> &#128512;</title>
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<main>
        <div class="big-wrapper">
            <img src="img/shape.png" alt="figure" class="shape">
            <header>
                <div class="container">
                    <div class="logo">
                        <img src="img/logo1.png" alt="logo">
                        <h3>Myvoice.</h3>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="#" style="--i:1">Acceuil</a></li>
                            <li><a href="#" style="--i:2">Nos sevices</a></li>
                            <li><a href="#" style="--i:3">Nos tarifs</a></li>
                            <li><a href="#" style="--i:4">contacts</a></li>
                            <li> <a href="connexion.php" class="btn">Se connecter</a> </li>
                        </ul>
                    </div>
                    <div class="overlay"></div>
                    <div class="humburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                        <h1>Le futur est ici </h1>
                        <h2>Commencer a explorer maintenant.</h2>
                        </div>
                        <p class="text">
                        Ne vous souciez plus des prises de decision collective 
                        dans votre entreprise ou dans votre groupe de travail. 
                        La solution n'est desormais plus qu'a un seul click.
                        </p>
                       
                        <div class="cta">
                        <a href="#" class="btn">Commencer Maintenant</a>
                        </div>
                    </div>
                    <div class="right">
                    <img src="img/person.png" alt="photo de presentation" class="person">
                    </div>
                </div>
            </div>
            <!-- <div class="bottom-area">
                    <div class="conatiner">
                        <button class="toggle-btn">
                            <i class="far fa-moon"></i>
                            <i class="far fa-sun"></i>
                        </button>
                    </div>
            </div> -->
        </div>
    </main>
</body>
<script>

        var humburger_menu;
        var big_wrapper;


        function declare(){
            humburger_menu = document.querySelector(".humburger-menu");
            big_wrapper = document.querySelector(".big-wrapper");
        }


        declare();

        function events() {
            humburger_menu.addEventListener("click", () => {
                big_wrapper.classList.toggle("active");
            });
        }

        events();
</script>
<script src="vendor/fontawesome/js/all.min.js"></script>
</html>