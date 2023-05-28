@extends('vote.layout')

<!-- =========== chargemen du css la parage d'actualit -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/vote/voteForm.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome/css/all.css') }}">
@endsection

<!-- ========== nav bar  -->
@section('nav-bar')
    @include('helpers.nav-bar')
@endsection

<!-- ============== section de la side-bar -->
@section('side-bar')
    @include('helpers.side-bar')
@endsection

<!-- =========== section du contenue meme -->
@section('content')
<div class="content">
    <div class="content-header">
        <h2>Actualité</h2>
        <!-- <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div> -->
    </div>
    <div class="sub-content">
        <input type="text" name="search" class="search" placeholder="Search..">

        @forelse($votes as $item)
            <div class="journal">
                <div class="rows">
                    <div class="col-15">
                        <i class="fa-solid fa-link"></i>
                    </div>
                    <div class="col-80">
                        <h2>{{ $item->titre }}</h2> <p>
                            debut:
                            <strong>{{ $item->dateDebut }}</strong><br>
                            Fin: 
                            <strong>{{ $item->dateFin }}</strong>
                        </p> <hr>
                        <!-- <h4>nouveau vote</h4>  -->
                        <!-- <p style="display: flex">Copier et envoyer le lien: <a href=""> {{ url('/dashboard/vote/'. hash('md2', $item->admin . $item->id) ) }} </a></p> -->
                        <p style="display: flex">Copier et envoyer le lien: <a href="{{ url('/dashboard/vote/' . $item->id) }}"> {{ url('/dashboard/vote/' . $item->id) }} </a></p>
                        <p> <a href="{{ url('/dashboard/sondage') }}">voir plus</a></p>
                    </div>
                </div>
            </div>
            @if( !empty(session('LoggedUser')) && session('LoggedUser.id') == $item->admin )
                <div class="del">
                    <form action="{{ url('/dashboard/vote/'. $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Suprimer" name="delete" class="dell">
                    </form>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection