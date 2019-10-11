<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-admin/{name?}.html', function ($name = 'Juan') {
    $data=[
        'nombre' => $name,
        'apellido' => 'Arce'
    ];
    return view('user.admin.index', $data);
});

Route::get('users/{id}', function ($id) {
    return "hola $id";
});

