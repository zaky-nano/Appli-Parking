@extends('layout')
@section('contenu')
<form action="/user_inscription" method="post">

{{ csrf_field() }}
<p>
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="text" name="identifiant" placeholder="Identifiant">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="identiteResponsable" placeholder="Nom et prénom">
        <input type="text" name="adressePostale" placeholder="Adresse postale">
        <input type="text" name="nombrePersonnes" placeholder="Nombre de personnes">
        <input type="text" name="nomPays" placeholder="Nom de pays">

        <input type="submit" value="M'inscrire">
</p>
    </form>
@endsection