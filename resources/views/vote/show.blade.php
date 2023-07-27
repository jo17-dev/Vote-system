@extends('vote.layout')
<!-- les sondages -->
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
            <h2>Dashboard</h2>
        </div>
        <div class="sub-content">
            <!-- les diferrents sujets ou candidats de vote -->
            <div class="subject">
                <?php $i=0; ?>
                @forelse($votes as $item)
                <div class="box" style="background-color: var(--blue)">
                    <div class="box-header">
                        <p> {{ $item[1] }} </p>
                        <?php $i++; ?>
                    </div>
                    <div class="box-footer">
                        <p> {{ $item[0]['titre'] }} </p>
                    </div>
                    <input type="hidden" name="voteId" class="vote_id" value="{{ $item[0]['id'] }}">
                </div>
                @endforeach
            </div>

            <div class="subject">
            <p>profil du  candidat </p><p>Details du vote</p>
            </div>
            <div class="subject">
                <div class="profil">
                    
                    <!-- <img src="{{ asset('/img/avatar2.png') }}" alt="2nd avatar" width=250> -->
                </div>
                <div class="data">
                <table id="data">
                    @forelse($candidats as $candidat)
                    <tr>
                        <input type="hidden" name="candidat_vote_id" value="{{ $candidat[1]  }}" class="input">
                        <td>{{ $candidat[0] }}</td>
                        <td>{{ $candidat[2] }}</td>
                    </tr>
                    @endforeach
                </table>
                </div> 
            </div>
            <div class="subject">
                <!-- <p>Statistiques Generale</p> -->
            </div>
<!--             <div class="box2">
            <p class="etat">vote positif</p>
 -->            <!-- <progress value="25" max="100"> 25% </progress> -->

            <!-- ici les bars de progressions  -->
<!--             <div class="progress">
                <div class="bar" style=" width:25%"><p>25%</p></div>
            </div>
 -->            <!-- <p class="etat">vote neutre</p> -->
            <!-- <div class="progress">
                <div class="bar" style="background: #ff9800; width:50%"><p>50%</p></div>
            </div> -->
<!--             <p class="etat">vote negatif</p>
            <div class="progress" >
                <div class="bar" style="background: #f44336; width:75%"><p>75%</p></div>
            </div>
            </div>
 -->
            <div class="subject">
            <p>Resultat finale du vote (titre)</p>
            </div>
            <div class="subject">
            <table id="data2">
                    @forelse($candidats as $candidat)
                    <tr>
                        <td>{{ $candidat[0] }}</td>
                    
                        <td>{{ $candidat[2] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="subject">
            <p>Echeance avant la fin des votes</p> <br> <?php  echo"<p>".date("y-m-d")."</p>"; ?>
            </div>
        </div>
</div>

<script src="{{ asset('/js/Sondage.js') }}"></script>
<script src="{{ asset('/js/voteParticulierInfo.js') }}"></script>
@endsection