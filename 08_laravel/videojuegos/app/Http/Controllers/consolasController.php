<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;
use DB;

class consolasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $consolas = Consola::all();

        return view('consolas/index', [
            "consolas" => $consolas
        ]);
        //aqui iria la logica del metodo

        /* $mensaje = "Esta es la lista de consolas";
        $consolas = [
            'Playstation 5',
            'Playstation 4',
            'Xbox',
            'Nintendo switch'
        ]; */


        /*   return view('consolas/index', [
            'mensaje' => $mensaje,   //'mensaje' es lo que se invoca
            'consolas' => $consolas
        ]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consolas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consolas = new Consola;
        $consolas->nombre = $request->input('nombre');
        $consolas->anio_salida = $request->input('Anio_salida');
        $consolas->generacion = $request->input('generacion');
        $consolas->descripcion = $request->input('descripcion');
        $consolas->save();

        return redirect('consolas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consola = Consola::find($id);
        return view(
            'consolas/show',
            [
                'consola' => $consola
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('consolas')->where('id', '=', $id)->delete();

        return redirect('consolas');
    }
}
