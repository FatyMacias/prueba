<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller

{
    public function index()
    {
    return view(users);
    }
    
    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }
    
    public function create()
    {
        return 'Crear Nuevo usuario';
    }
}
 
