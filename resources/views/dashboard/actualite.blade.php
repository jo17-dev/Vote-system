@extends('vote.layout')

<!-- =========== chargemen du css la parage d'actualit -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/vote/voteForm.css') }}">
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
                        <h2>{{ $item->titre }}</h2> <p> Fin du vote ....</p> <hr>
                        <!-- <h4>nouveau vote</h4>  -->
                        <p style="display: flex">Copier et envoyer le lien: <a href=""> {{ url('/dashboard/vote/'. hash('md2', $item->admin . $item->id) ) }} </a></p>
                        <p> <a href="{{ url('/dashboard/vote/'. $item->id) }}">voir plus</a></p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
@endsection