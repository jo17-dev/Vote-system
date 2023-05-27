<!-- <h1>Bienvenue  @{{  $LoggedUser['nom']}}...</h1> -->
@extends('dashboard.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/dashboard/style-dashboard.css') }}">
@endsection

@section('nav-bar')
    @include('helpers.nav-bar')
@endsection

@section('content')
   <h1>Bienvenue... {{ $LoggedUser->nom }}</h1>

    <div class="container2">
   <!-- <button class="btn">  Nouveau scrutin </button> -->
    <hr>
        <div class="row">
                <a href="{{ url('/dashboard/vote') }}"> 
                    <div class="box"> 
                        <h4> creer un vote simple  </h4>
                        <p> Prenez des descisions collectives en toute simplicite. </p>
                    </div>
                </a>
                <a href="{{ url('/dashboard/person-vote') }}">
                    <div class="box">
                        <h4> Creer un vote de candidat</h4>
                        <p> Decidez du choix d'un representant par la democratie </p>
                    </div>
                </a>
        </div>
        <div class="row"> 
            <a href="{{ url('/dashboard/actualite') }}">
                <div class="box">
                     <h4> File d'actualite </h4> 
                     <p> visitez tous les votes en cour.  </p>
                </div>
            </a>
            <a href="{{ url('/dashboard/vote/person-vote') }}">
                <div class="box">
                     <h4> Sondage </h4>
                     <p> visitez les sondage des votes en cour </p>
                </div>
            </a>
        </div>  
        <div class="circle"></div>
        <!-- <div class="foot"><img src="../img/shape.jpg" alt="image du footer" class="shape"></div> -->
    </div>
@endsection