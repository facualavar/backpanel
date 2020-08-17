<?php

namespace App\Http\Controllers;

use App\models\SubSubRubro;
use Illuminate\Http\Request;

class SubSubRubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = UtilController::arrayResponse();

        $subSubRubros = SubSubRubro::all();

        $response['data'] = $subSubRubros;
        return response()->json($subSubRubros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = UtilController::arrayResponse();

        $subSubRubro = SubSubRubro::create($request->all());

        $response['data'] = $subSubRubro;
        return response()->json($subSubRubro);       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\SubSubRubro  $subSubRubro
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubRubro $subSubRubro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\SubSubRubro  $subSubRubro
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubRubro $subSubRubro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\SubSubRubro  $subSubRubro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSubRubro $subSubRubro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\SubSubRubro  $subSubRubro
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSubRubro $subSubRubro)
    {
        //
    }
}
