<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        return Formation::all();
    }

    public function store(Request $request)
    {
        return Formation::create($request->all());
    }
}