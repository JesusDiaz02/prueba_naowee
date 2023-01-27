<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['baseClientes']=Cliente::paginate(1);
        return view('punto_uno_cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('punto_uno_cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campos=[
            'primer_nombre'=>'required|string|max:100',
            'segundo_nombre'=>'required|string|max:100',
            'primer_apellido'=>'required|string|max:100',
            'segundo_apellido'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=> 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        
        $datosCliente = $request->except('_token');
        Cliente::insert($datosCliente);
               
        
        return redirect('punto_uno_cliente')->with('mensaje', 'Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosCliente=Cliente::findOrFail($id);
        return view('punto_uno_cliente.edit', compact('datosCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'primer_nombre'=>'required|string|max:100',
            'segundo_nombre'=>'required|string|max:100',
            'primer_apellido'=>'required|string|max:100',
            'segundo_apellido'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=> 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);



        $datosCliente = $request->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);

        $datosCliente=Cliente::findOrFail($id);
        //return view('punto_uno_cliente.edit', compact('datosCliente'));
        return redirect('punto_uno_cliente')->with('mensaje', 'Cliente modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        //return redirect('punto_uno_cliente');

        return redirect('punto_uno_cliente')->with('mensaje', 'Cliente Borrado con exito');

    }
}
