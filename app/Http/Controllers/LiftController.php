<?php

namespace App\Http\Controllers;

use App\Models\Lift;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $lifts = Lift::all();
        return Inertia::render('Lifts/Index', ['lifts' => $lifts]);

//        dd($lifts);
    }
}
