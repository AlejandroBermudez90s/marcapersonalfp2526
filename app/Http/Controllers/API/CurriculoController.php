<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurriculoResource;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $curriculoData = json_decode($request->getContent(), true);
        $curriculoData = [
            'user_id' => Auth::user()->id
        ];

        $curriculo = Curriculo::create($curriculoData);

        return new CurriculoResource($curriculo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curriculo $curriculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculo $curriculo)
    {
        $curriculoData = [
            'user_id' => Auth::user()->id
        ];

        $curriculo->update($curriculoData);

        return new CurriculoResource($curriculo);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculo $curriculo)
    {
        //
    }
}
