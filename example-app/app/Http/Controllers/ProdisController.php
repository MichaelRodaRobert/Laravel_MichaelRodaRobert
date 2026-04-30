<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $prodis = Prodi::with('fakultas')->get();
    return view('prodi.index', compact('prodis'));
}

}
