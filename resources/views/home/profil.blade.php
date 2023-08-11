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
                <div class="cercle" id="myBtn"><i class="fa-solid fa-user-pen fa-2xl"></i></div>
            
        </div>
    </div>

    <div class="d4">
            <div class="pr" style="border-top: 1px solid black;">
                Nom: {{ $LoggedUser['nom'] }}
            </div>
       
            <div class="pr">
                email: {{ $LoggedUser['email'] }}
            </div>

            <!-- @if(Session::get('success'))
                <div class="success-alert">
                    {{Session::get('success')}}
                 </div>
            @endif
            @if(Session::get('fail'))
                <div class="danger-alert pr" style="color: red">
                    {Session::get('fail')}}
            @endif        
                    @error('email'){{ $message }}  @enderror
                    @error('nom'){{ $message }}  @enderror 
                    @error('oldPassword'){{ $message }}  @enderror
                    @error('newPassword'){{ $message }}  @enderror
                </div> -->
                
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Mettre a jour les informations du compte</h2>

            <form action="{{ url('home/profil/'.$LoggedUser->id) }}" method="POST">
                {{ @csrf_field() }}
                @method('PUT')
                <input type="text" id="fname" name="nom"  placeholder="{{ $LoggedUser['nom'] }}" >

                <input type="email" class="mail" id="lname" name="email"  placeholder="{{ $LoggedUser['email'] }}">

                <input type="text" id="lname" name="newPassword" placeholder=" Votre nouveau mot de passe ..">
  
                <input type="submit" value="Soumettre">
            </form>
        </div>

    </div>
</body>
<script>
        // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    } 
</script>
</html>