<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Compania;
use DB;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*  $videojuegos = [
            ["GTA V", 60, 18, "juego de rockstar mundo abierto"],
            ["Asassins", 20, 6, "juego espectacular"],
            ["Minecraft", 40, 6, "A minar chavales"]
        ]; */

        $videojuegos = Videojuego::all();  //SELECT FROM videojuegos

        $mensaje = "Tabla de videojuegos";

        return view(
            'videojuegos/index',
            [
                "videojuegos" => $videojuegos,  //'mensaje' es lo que se invoca
                "mensaje" => $mensaje
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //muestra la vista
    {
        $companias = Compania::all();
        return view('videojuegos/create',
        [
            'companias' => $companias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //la insercion (inset se hace aqui)
    {
        $videojuego = new Videojuego;
        $videojuego->titulo = $request->input('titulo');
        $videojuego->precio = $request->input('precio');
        $videojuego->pegi = $request->input('pegi');
        $videojuego->descripcion = $request->input('descripcion');
        $videojuego->compania_id = $request -> input('compania_id');
        $videojuego->save();

        return redirect('videojuegos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego = Videojuego::find($id);  //es igual que un  SELECT*FROM
        return view(
            'videojuegos/show',
            [
                'videojuego' => $videojuego
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
        $videojuego = Videojuego::find($id);
        return view(
            'videojuegos/edit',
            [
                'videojuego' => $videojuego
            ]
        );
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
        $videojuego = Videojuego::find($id);

        $videojuego -> titulo = $request -> input('titulo');
        $videojuego -> precio = $request -> input('precio');
        $videojuego -> pegi= $request -> input('pegi');
        $videojuego -> descripcion = $request -> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('videojuegos')->where('id', '=', $id)->delete();

        return redirect('videojuegos');
    }

     /**
     * Busca todos los videojuegos que contengan
     * la palabra introducida en el buscador
     * 
     * @param string $titulo
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {

        $titulo = $request -> input('titulo');
        
        $videojuegos = DB::table('videojuegos')
            ->where('titulo', 'like', '%' . $titulo . '%')
            ->get();

        return view('videojuegos/search',
            [
                'videojuegos' => $videojuegos
            ]
        );
    }
}
