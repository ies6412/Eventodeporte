<?php

namespace App\Http\Controllers;
use App\role;
use App\Permiso;
use Illuminate\Http\Request;

class ControladorRoles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $roles=role::get();
       return view('Roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos=permiso::get();
        return view('roles.create',compact('permisos'));
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
         'nombrerol'=>'required|max:50|unique:roles,nombrerol',
         'slug'=>'required|max:50',
         'descripcion'=>'required|max:50'
       ]);
         if($request->get('permisos'))
         {   $role=role::create($request->all());
            $role->permisoss()->sync($request->get('permisos'));
            return redirect()->route('roles.index')->with('status_success','role creado');
         }
         else {
         return redirect()->route('roles.create')->with('status_danger','Escoja por lo menos un permiso');
         }


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
        //
    }
}
