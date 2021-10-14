@extends('layout')

@section('nav')
<nav>
    <a href="/" class="active">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
</nav>
@endsection

@section('content')

<h1>Eerstvolgende toernooi</h1>
<p>Kom ook zwerkbal spelen op het eerst volgende toernooi!</p>
<div class="info-image">
    <div class="info">
        <h3>test</h3>
    </div>
    <div class="image">
        <img src="img/snitch.png" alt="snitch">
    </div>
</div>

@endsection