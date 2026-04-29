<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->keahlian;

    $mitra = \App\Models\Mitra::when($keyword, function ($query) use ($keyword) {
        return $query->where('keahlian', 'like', '%' . $keyword . '%');
    })->get();

    return view('mitra.index', compact('mitra', 'keyword'));
}
}
