<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/bonjour', function () {
    return view('bonjour');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/admin_inscription', function () {
    return view('admin_inscription');
});

Route::post('/admin_inscription', function () {
$admin = new App\Administrateur;

request()->validate([
    'nom' => ['required'],
    'identifiant' => ['required', ],
    'email' => ['required', 'email', 'exists(Administrateur)'],
    'password' => ['required', 'confirmed', 'min:8'],
    'password_confirmation' => ['required'],
]);

$admin->emailresp = request('email');
$admin->identifiant = request('identifiant');
$admin->nom = request('nom');

$admin->mot_de_passe = bcrypt(request('password'));
$admin->password_confirmation = bcrypt(request('password_confirmation'));
$admin->save();
return 'Votre email est ' . request('email').'et votre motde passe est'.request('password');

});


Route::get('/user_inscription', function () {
    return view('user_inscription');
});



Route::post('/user_inscription', function () {
$user = new App\Utilisateur;


$user->emailresp = request('email');
$user->mot_de_passe = bcrypt(request('password'));
$user->password_confirmation = bcrypt(request('password_confirmation'));

$user->identifiant = request('identifiant');
$user->nom = request('nom');
$user->identiteResponsable = request('identiteResponsable');
$user->adressePostale = request('adressePostale');
$user->nombrePersonnes = request('nombrePersonnes');
$user->nomPays = request('nomPays');



$user->save();
return 'Votre nom de pays est ' . request('nomPays').'et votre adresse postale est'.request('adressePostale');

});


Route::get('/utilisateurs', function () {
    $utilisateurs = new App\Utilisateur;
      $utilisateurs = DB::table('utilisateurs')->get();

        return view('utilisateurs', ['utilisateurs' => $utilisateurs]);
   
});