<?php

namespace App\Http\Controllers;

use App\Models\LiftManager;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LiftManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $liftManagers = LiftManager::all();

        return Inertia::render('LiftManagers/Index', ['liftManagers' => $liftManagers]);
    }

}
