</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> &#128512;</title>
    <link rel="stylesheet" href="{{ asset('./css/index/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/index/media.css') }}">
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
                            <li><a href="#nos-produits" style="--i:3">Nos services</a></li>
                            <li><a href="#contact" style="--i:4">contacts</a></li>
                            <li><a href="#a-propos" style="--i:2">A propos</a></li>
                            <li> <a href="{{ url('/sign') }}" class="btn">Se connecter</a> </li>
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
        </div>
        <br><br>
        <div class="section" id="nos-produits">
            <div class="section-header">
                <p class="stroke"></p><strong class="small-text">La simplicité</strong>
            </div>
            <div class="section-body">
                <div class="left">
                    <img src="" alt="Deuxieme image">
                </div>
                <div class="right right-side">
                    <div class="big-title">
                        <h2>Nos produits sont conçus pour préserver votre temps.</h2>
                    </div>
                    <p class="text">
                        L'importance d'une excellente expérience utilisateur est important pour nous.
                        L'ergonomie et la simplicité de notre produit est essentielle pour vous.
                    </p>
                   
                    <div class="cta">
                        <a href="#" class="btn-produit">Essayer le produit !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partie du formulaire d'envoie de message aux gens -->
        <div class="section" id="contact">
            <!-- <div class="full-stroke"></div> -->
            <div class="section-header">
                <div class="stroke"></div><strong class="small-text">Contact</strong>
            </div>
            <div class="section-body">
                <div class="left">
                    <div class="big-title">
                        <h2>Envoyer un message a l'équipe</h2>
                    </div>
                </div>
                <div class="right-side">
                    <form action="" method="post">
                        <div class="form-div">
                            <label for="name">Votre nom</label>
                            <input type="text" name="name" id="name" placeholder="Jean duppont">
                        </div>
                        <div class="form-div">
                            <label for="email">Votre email</label>
                            <input type="email" name="email" id="email" placeholder="exemplde@email.com">
                        </div>
                        <div class="form-div">
                            <label for="phone">Votre numéro de téléphone</label>
                            <input type="number" name="phone" id="phone" placeholder="Ex: 237 699 30 50 37">
                        </div>
                        <div class="form-div">
                            <label for="subject">Sujet</label>
                            <input type="text" name="subject" id="subject" placeholder="Ex: Support">
                        </div>
                        <div class="form-div description">
                            <label for="message">Votre message</label>
                            <textarea name="message" id="message" cols="30" rows="3" placeholder="Comment peut-on vous aider ?"></textarea>
                        </div>
                        <div class="form-div">
                            <input type="submit" value="Envoyer le mail" class="submit-btn btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <div class="section" id="a-propos">
            <div class="section-header">
                <p class="stroke"></p><strong class="small-text">A propos</strong>
            </div>
            <div class="section-body">
                <div class="left">
                    <div class="big-title">
                        <h2>Nous sommes un petit 
                            groupe de quatre étudiants 
                            dynamiques passionés par le 
                            devellopement de solutions
                            numériques</h2>
                    </div>
                    <p class="text">
                        
                    </p>
                </div>
                <div class="right right-side">
                    <img src="" alt="image de nous / de L'uds">
                </div>
            </div>
            <div class="copyright">
                <div class="stroke"></div>
                <div class="copyright-text">Copyright 2023 - gratuit d'utilisation</div>
                <div class="stroke"></div>
            </div>
        </div>
    </main>
</body>
<script src="./js/index.app.js"></script>
</html>