<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = Empleado::all()->toArray();
        return view('empleado.index', compact('empleados'));
    }


    public function inicio()
    {
        return view('inicio');
    }

    public function acerca()
    {
        $empleados = Empleado::all()->toArray();
        return view('acercade', compact('empleados'));
    }

    public function blog()
    {
        return view('blog');
    }

    
    public function contacto()
    {
        return view('contacto');
    }

    public function clases()
    {
        return view('clases');
    }

    public function create()
    {
        return view('empleado.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'    =>  'required',
            'puesto'     =>  'required',
            'tipo_de_empleado'     =>  'required',
            'horario'     =>  'required',
            'pago_mensual'     =>  'required',
            'imagen'     =>  'required',
        ]);
        $empleado = new Empleado([
            'nombre'    =>  $request->get('nombre'),
            'puesto'     =>  $request->get('puesto'),
            'tipo_de_empleado'    =>  $request->get('tipo_de_empleado'),
            'horario'     =>  $request->get('horario'),
            'pago_mensual'    =>  $request->get('pago_mensual')
        ]);
        $empleado->save();
        return redirect()->route('empleado.index')->with('success', 'Empleado agregada con exito');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.edit', compact('empleado', 'id'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'nombre'    =>  'required',
          'puesto'     =>  'required',
          'tipo_de_empleado'    =>  'required',
          'horario'     =>  'required',
          'pago_mensual'     =>  'required',
        ]);
        $empleados = Empleado::find($id);
        $empleados->nombre = $request->get('nombre');
        $empleados->puesto = $request->get('puesto');
        $empleados->tipo_de_empleado = $request->get('tipo_de_empleado');
        $empleados->horario = $request->get('horario');
        $empleados->pago_mensual = $request->get('pago_mensual');
        $empleados->save();
        return redirect()->route('empleado.index')->with('success', 'Empleado actualizado');
    }

    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado');
    }
}
