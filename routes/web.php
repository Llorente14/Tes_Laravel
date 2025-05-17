<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage',['title'=> "Homepage"]);
});

Route::get('/menu', function () {
    return view('customer/menus',['title'=> "Menu Warteg", 'menus' => Menu::all()]);
});

Route::get('/menu/{menu:slug}', function (Menu $menu) {
    return view('customer/menu',['title'=> $menu->name, 'menu' => $menu]);
});
Route::get('/about', function () {
    return view('about',['title'=> "Tentang Kami"]);
});
