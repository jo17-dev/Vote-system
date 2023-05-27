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
        <h2>Nommination</h2>
    </div>
    <div class="sub-content">


<!-- formulaire de vote de candidat -->

<div class="containers">
    <form action="">
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
            <label for="lname">Date</label>
        </div>
        <div class="col-75">
            <input type="date" id="lname" name="begin" placeholder="Your last name.." >
            <input type="date" id="lname" name="end" placeholder="Your last name..">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="lname">Motivation</label>
        </div>
        <div class="col-75">
        <input type="text" id="lname" name="motivation" placeholder="Motivation(s) du candidat">
        </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label for="lname">Candidats</label>
        </div>
        <div class="col-75">
            <div id="cand"><input type="text" name="candidat[]" placeholder="nom du candidat.." ></div>
            <input type="button" name="end" value="+ Ajouter" onclick="Add()" >
            <input type="button" name="end" value="- Enlever" onclick="remove()" style="background: var(--red)">
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
<script src="{{ asset('/js/voteForm.js') }}"> </script>
@endsection