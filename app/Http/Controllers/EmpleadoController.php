<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Empleado;
use App\Models\EmpleadoRol;
use App\Models\Rol;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        
        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $roles = Rol::all();

        return view('empleado.create', compact('areas', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([            
            'nombre' => 'required',
            'email' => 'required|email',
            'sexo' => 'required',
            'area_id' => 'required',
            'descripcion' => 'required',
            'boletin' => 'nullable',
            'roles' => 'required|array',
        ]);
        
        unset($validated['roles']);

       
        $empleado_nuevo = Empleado::create($validated);
        
        foreach ($request->get('roles') as $rol)
            $roles_nuevos[] = ['rol_id' => $rol];
        
        $empleado_nuevo->roles()->createMany( $roles_nuevos);

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $areas = Area::all();
        $roles = Rol::all();
        
        $roles_empleado = $empleado->roles->pluck('rol_id')->toArray();

        return view('empleado.edit', compact('empleado', 'roles_empleado', 'areas', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $validated = $request->validate([            
            'nombre' => 'required',
            'email' => 'required|email',
            'sexo' => 'required',
            'area_id' => 'required',
            'descripcion' => 'required',
            'boletin' => 'nullable',
            'roles' => 'required|array',
        ]);
        
        unset($validated['roles']);

       
        $empleado->update($validated);
        
        
        foreach ($request->get('roles') as $rol)
            $roles_nuevos[] = ['rol_id' => $rol];

        $empleado->roles()->delete();
        $empleado->roles()->createMany($roles_nuevos);

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
