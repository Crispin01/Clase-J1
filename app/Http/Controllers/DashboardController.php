<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalPaises = Pais::count();
        $totalUsuarios = User::count();
        return view('dashboard', compact('totalPaises','totalUsuarios'));
    }

}
