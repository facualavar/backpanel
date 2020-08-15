<?php

namespace App\Http\Controllers;

use App\models\SubRubro;
use Illuminate\Http\Request;

class SubRubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subRubros = SubRubro::all();
        return $subRubros;
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
        $subRubro = SubRubro::create($request->all());
        return $subRubro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\SubRubro  $subRubro
     * @return \Illuminate\Http\Response
     */
    public function show(SubRubro $subRubro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\SubRubro  $subRubro
     * @return \Illuminate\Http\Response
     */
    public function edit(SubRubro $subRubro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\SubRubro  $subRubro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubRubro $subRubro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\SubRubro  $subRubro
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubRubro $subRubro)
    {
        //
    }
}
