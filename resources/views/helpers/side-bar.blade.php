@section('side-bar')
<div class="sidenav">
    
    <img src="{{ asset('/img/avatar3.png') }}" alt="" class="avatar"> <hr>
    <a href="{{ url('/dashboard') }}">Menu principal</a>
    <a href="{{ url('/dashboard/actualite') }}">Actualite</a>
    <a href="{{ url('/dashboard/vote') }}">Vote simple</a>
    <a href="{{ url('/dashboard/person-vote') }}">Vote de candidat</a>
    <a href="{{ url('/dashboard/sondage') }}">Sondage de votes</a>
    
</div> 
@endsection