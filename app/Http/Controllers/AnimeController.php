<?php

namespace App\Http\Controllers;

use App\Models\anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{


    public  function list(){
        return auth()->user->produtos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        anime::create([
            'nome'=> $request->nome,
            'estudio'=> $request->estudio,
            'user_id' =>Auth::user()->id,

        ]);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(anime $anime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(anime $anime)
    {
        //
    }
}
