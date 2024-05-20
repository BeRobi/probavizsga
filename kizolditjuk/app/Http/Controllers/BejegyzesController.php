<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzes;
use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    public function index()
    {
        $bejegyzesek = response()->json(Bejegyzes::with('tevekenyseg')->get());
        return $bejegyzesek;
    }

    public function show($id)
    {
        return Bejegyzes::find($id);
    }

    public function postBejegyzes(Request $request)
    {
        $bejegyzes = new Bejegyzes();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }
}
