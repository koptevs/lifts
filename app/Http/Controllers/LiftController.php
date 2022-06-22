<?php

namespace App\Http\Controllers;

use App\Models\Lift;
use App\Models\LiftManager;
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
        $lifts = Lift::with('liftManager')->get();
        return Inertia::render('Lifts/Index', ['lifts' => $lifts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
//        app()->setLocale('lv');
        // create form
        $liftManagers = LiftManager::all();

        return Inertia::render('Lifts/Create', [
            'liftManagers' => $liftManagers,
            'liftTypes' => ['elektriskais', 'hidrauliskais'],
            'cityRegions' => [
                'Centra rajons', 'Latgales priekšpilsēta', 'Vidzemes priekšpilsēta', 'Ziemeļu priekšpilsēta',
                'Zemgales priekšpilsēta', 'Kurzemes rajons'
            ],
        ]);
    }



}
