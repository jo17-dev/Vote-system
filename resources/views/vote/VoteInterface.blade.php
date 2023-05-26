<?php
    $i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/vote/voteInterface.css') }}" type="text/css">
    <title>VoteInterface</title>
</head>

<body>
    <div class="header first">
        {{ $vote->titre; }}
    </div>
    <div class="header">
        {{ $vote->description; }}
    </div>

    <div class="d2 first">
        <p>Pour quel choix optez vous ?</p>
        <form action="{{ url('/dashboard/vote/' . $vote->id ) }}" method="POST">
            @csrf
            @method('PUT')
            @forelse($cand as $c)

            <p class="op"><input type="radio" name="choix" value="{{ $c->id }}"> {{ $c->nom}} </p>

            <?php $i++; ?>

            @endforeach
            <input type="hidden" name="vote_id" value="{{ $vote->id }}">

            <!-- <p class="op"><input type="radio" name="candidat" value="null"> Vote blanc </p> -->

            <!-- <button>
                Valider
            </button> -->

            <input type="submit" value="Valider" class="button">
        </form>
    </div>
</body>

</html>