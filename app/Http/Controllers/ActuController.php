<?php

namespace App\Http\Controllers;

use App\Actu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ActuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actus = Actu::all();
        return view('actu', compact('actus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.actu-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newActu = new Actu;
        $newActu->title = $request->title;
        $newActu->text = $request->text;
        $newActu->image = $request->image;
        $newActu->date = date('Y-m-d h:i:s');
        $newActu->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function show(Actu $actu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function edit(Actu $actu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actu $actu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actu $actu)
    {
        //
    }
}
