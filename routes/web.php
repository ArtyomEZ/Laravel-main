<?php
use \App\Models\Knife;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {

    $username = 'Artyom le goat';
    $password = "ArtyomBgDu69";
    $hachage = password_hash($password, PASSWORD_DEFAULT);

    return view('home', [ 'user' => $username
    , 'password' => $hachage]);
});

Route::get('/Addition/{numero1}/{numero2}', function ($numero1,$numero2) {
    return view('Addition', compact(['numero1','numero2']));
});

Route::get('/knife/{id}', function ($id) {
    $knivesid = Knife::findOrFail($id);
    return view('show', compact('knivesid'));
})->name('knife.show');;

Route::get('/knife', function (){
    $knives = Knife::all();
    return view('index', compact('knives'));
})->name('knife.index');

Route::get('create', function (){
    return view('create');
})->name('knife.create');

Route::post('/knife', function () {

    $validated = request()->validate([
        'name' => 'required',
        'price' => 'required',
       'desc' => 'required',
    ]);


    $k= new Knife;
    $k->name = request('name');
    $k->desc = request('desc');
    $k->birth_date = request('date');
    $k->price = request('price');
    $k->image = request('image');
    $k->save();

    return redirect('/knife/'.$k->id);
})->name('knife.createe');
