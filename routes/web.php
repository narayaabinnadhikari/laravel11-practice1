<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "mario", "skill" => 85, "id" => "1"],
        ["name" => "luigi", "skill" => 55, "id" => "2"],
    ];
    return view('ninja.index', ["greeting" => "🙏 NAMASTE 🙏", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninja.create');
});

Route::get('/ninjas/{id}', function ($id) {
    //fetching record with id in future
    return view('ninja.show', ["id" => $id]);
});
