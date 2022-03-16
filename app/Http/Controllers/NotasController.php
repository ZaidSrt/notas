<?php

namespace App\Http\Controllers;

use App\Notas;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $notas = DB::table('notas')->orderBy('id', 'desc')->get();

        return view('notas.index')->with('notas', $notas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $data = $request->validate([
            'titulo' => 'required',
            'nota' => 'required'
        ]);

        Notas::create([
            'titulo' => $data['titulo'],
            'nota' => $data['nota'],
        ]);

        return redirect()->action('NotasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(notas $notas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit(notas $notas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notas $notas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(notas $notas) {

        $notas->delete();

        return redirect()->action('NotasController@index');
    }
}
