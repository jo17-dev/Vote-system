@section('nav-bar')
<header>
    <div class="container">
        <div class="logo">
            <img src="../img/logo1.png" alt="logo">
            <h3>Myvoice.</h3>
        </div>
        <div class="links">
            <ul>
                <li> <a href="{{ url('dashboard/actualite') }}"> <i class="fa-solid fa-circle-info fa-xl"></i></a> </li>
                <li> <a href="#"> <i class="fa fa-user fa-xl"></i> </a> </li>
                <li> <a href="{{ url('/') }}"> <i class="fa-solid fa-power-off fa-2xl"></i></a></li>
            </ul>
        </div>
    </div>
</header>
@endsection