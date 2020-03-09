@extends('layout')
@section('contenu')
<form action="/admin_inscription" method="post">

{{ csrf_field() }}


<p><input type="text" name="identifiant" placeholder="identifiant" value="{{ old('identifiant') }}"></p>
@if($errors->has('identifiant'))
    <p>{{ $errors->first('identifiant') }}</p>
@endif
<p><input type="text" name="nom" placeholder="Nom administrateur" value="{{ old('nom') }}"></p>
@if($errors->has('nom'))
    <p>{{ $errors->first('nom') }}</p>
@endif
<p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
@if($errors->has('email'))
    <p>{{ $errors->first('email') }}</p>
@endif

</p><input type="password" name="password" placeholder="Mot de passe" ></p>
@if($errors->has('password'))
    <p>{{ $errors->first('password') }}</p>
@endif  
</p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>

</p><input type="submit" value="M'inscrire"></p>  
          
    </form>
@endsection