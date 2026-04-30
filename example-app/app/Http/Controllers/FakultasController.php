<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fakultas = Fakultas::all();
        // SELECT * FROM fakultas
        //var dump
        // dd($fakultas);

        return view("fakultas.index")-> with("fakultas", $fakultas);
    }

}
