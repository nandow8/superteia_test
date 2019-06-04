<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // padrao
        toastr()->success('salvo com sucesso');  

        //personalizado
        // toastr()->success('salvo com sucesso', 'titulo', ['timeOut' => "1000"])->info('buiatchaca','titulo2', ['timeOut' => "5000"]);
        return view('home');
    }
}
