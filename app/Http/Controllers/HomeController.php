<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Daftar;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $daftars = DB::table('daftars')->count();
        return view('home', compact('daftars'));
    }
    public function boot()
    {
        Paginator::useBootstrap();
    }

    public function daftar_peserta()
    {
        $daftars = Daftar::latest()->paginate(9);

        return view('admins.daftar-peserta', compact('daftars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
