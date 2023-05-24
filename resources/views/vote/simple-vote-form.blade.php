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
            <form action="{{ url('/dashboard/vote') }}" >
                @csrf
                @method('post')
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
                    <input type="text" id="lname" name="motivation" placeholder="Pourquoi faire ce vote ?">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Lien a partager</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="link"  placeholder="" readonly style="background-color: #f2f2f2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Date de debut et fin</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="lname" name="begin" placeholder="Your last name.." >
                    <input type="date" id="lname" name="end" placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Resolution</label>
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

<script src="{{ asset('/js/voteForm.js') }}"></script>
@endsection