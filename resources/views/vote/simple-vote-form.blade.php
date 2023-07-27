<!-- form for create a new vote -->
@extends('vote.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vote/voteForm.css') }}">
@endsection

@section('nav-bar')
    @include('helpers.nav-bar')
@endsection

@section('side-bar')
    @include('helpers.side-bar')
@endsection


@section('content')
<div class="content">
    <div class="content-header">
        <h2>Resolution</h2>
        <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
    </div>
    <div class="sub-content">

        <div class="containers">
            <form action="{{ url('/dashboard/vote') }}" method="POST">
                @csrf
                @method('post')
                <input type="hidden" name="voteType" value="thing">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Titre</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="titre"  placeholder="titre du vote..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Objectifs</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="lname" name="whyToDo" placeholder="Pourquoi faire ce vote ?">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Date de debut et fin</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="lname" name="dateDebut" placeholder="Your last name.." >
                    <input type="date" id="lname" name="dateFin" placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Choix, </label>
                        <label for="lname">Motivation</label>
                    </div>
                    <div class="col-75">
                        <div id="cand">
                            <input type="text" name="candidat_0" placeholder="nom du choix.." >
                            <input type="text" name="motivation_0" placeholder="Motivation" >
                        </div>
                        <input type="button" name="end" value="+ Ajouter" onclick="Add('candidat')" >
                        <input type="button" name="end" value="- Enlever" onclick="/*remove('candidat');*/remove('motivation');" style="background: var(--red)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="subject">Description</label>
                    </div>
                    <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Une courte description de votre sujet de vote ..." style="height:200px"></textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('/js/voteForm.js') }}"></script>
@endsection