@extends('layout')
@section('contenu')
<h1>Les utilisateurs</h1>

<ul>
    @foreach($utilisateurs as $utilisateur)
        <li>{{ $utilisateur->emailresp }}</li>
    @endforeach
</ul>
@endsection
