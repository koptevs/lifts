<?php

namespace App\Http\Controllers;

use App\Models\Lift;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LiftController extends Controller
{
    public function index()
    {
        $lifts = Lift::all();
        return Inertia::render('Lifts/Index', ['lifts' => $lifts]);

//        dd($lifts);
    }
}
