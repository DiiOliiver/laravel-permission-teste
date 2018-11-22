<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$collectionOfRoles = ['admin','prestador'];

		return view('tabelas.inicio')->with([
			'collectionOfRoles' => $collectionOfRoles
		]);
    }

	public function anime() {
		return view('tabelas.animes');
	}

	public function jogo() {
		return view('tabelas.jogos');
	}

	public function nome() {
		return view('tabelas.nomes');
	}
}
