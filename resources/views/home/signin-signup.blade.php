<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('./css/signin-signup/signin-signup.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="signin-signup">


                <!-- Formulaire de connexion  -->
                <form action="" class="sign-in-form">
                    <h2 class="title">Connexion</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" value="Se connecter" class="btn solid">
                </form>

                <!-- Fornulaire d'inscription -->
                <form action="{{ route('home.save')}}" class="sign-up-form" method="POST">
                  
                @if(Session::get('success'))
                    <div style="color: green">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::get('success'))
                    <div style="color: red">
                        {{Session::get('fail')}}
                    </div>
                @endif

                @csrf
                    <h2 class="title">Inscription</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nom d'utilisateur" name="nom" value="{{ old('name') }}">
                    </div>
                    <span style="color: red"> @error('nom'){{ $message }} @enderror </span>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email" value="{{ old('email');}}">
                    </div>
                    <span style="color: red"> @error('email'){{ $message }}  @enderror </span>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mot de passe" name="password">
                    </div>
                    <span style="color: red"> @error('password'){{ $message }} @enderror </span>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirmation de mot de passe">
                    </div>
                    <span style="color: red"> @error('password'){{ $message }} @enderror </span>
                    <input type="submit" value="S'inscrire" class="btn solid">
                    <a href="dashboard/dashboard.php"> dashboard</a>
                </form>
            </div>
        </div>

        <div class="panels-container">
            
            <div class="pannel left-panel">
                <div class="content">
                    <h3>Pas de compte ?</h3>
                    <p>Cliquer sur le boutton ci-dessous pour creer un compte pour faire partir 
                        de Myvoice.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
                </div>

                <img src="img/undraw_maker_launch_re_rq81.svg" alt="image en svg ici" class="image">
            </div>

            <div class="pannel right-panel">
                <div class="content">
                    <h3>Vous avez deja un compte ?</h3>
                    <p>Cliquer sur le boutton ci-dessous pour vous connecter
                        a votre compte Myvoice.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Se connecter</button>
                </div>

                <img src="img/undraw_access_account_re_8spm.svg" alt="image en svg ici" class="image">
            </div>
        </div>
    </div>
    
</body>
<script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener('click', () => {
        container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener('click', () => {
        container.classList.remove("sign-up-mode");
    });
</script>
<script src="vendor/fontawesome/js/all.min.js"></script>
</html>