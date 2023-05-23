<!-- form for create a new vote -->
@extends('vote.layout')

@section('title')
    Creer un vote (Formualaire)
@endsection


@section('content')
    <form action="{{ url('dashboard/vote') }}" method="post">
        @csrf
        @method('post')
        
        <input type="text" name="title" id="title" placeholder="Titre du vote">
        <input type="text" name="title" id="">
    </form>    
@endsection