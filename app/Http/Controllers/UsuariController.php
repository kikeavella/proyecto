<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuaris']=Usuari::paginate(5);
        return view('usuari.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuari.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'USUARI_Nombre____b'=>'required|string|max:255',
            'USUARI_Correo___b'=>'required|email',
            'USUARI_Identific_b'=>'required|string|max:20',
            'USUARI_Clave_____b'=>'required|string|max:255',
            'USUARI_Cargo_____b'=>'required|string|max:50',
            'USUARI_Foto______b'=>'required|max:400kb|mimes:jpeg,png,jpg',
            'USUARI_HorIniLun_b'=>'required',
            'USUARI_HorFinLun_b'=>'required',
            'USUARI_HorIniMar_b'=>'required',
            'USUARI_HorFinMar_b'=>'required',
            'USUARI_HorIniMie_b'=>'required',
            'USUARI_HorFinMie_b'=>'required',
            'USUARI_HorIniJue_b'=>'required',
            'USUARI_HorFinJue_b'=>'required',
            'USUARI_HorIniVie_b'=>'required',
            'USUARI_HorFinVie_b'=>'required',
            'USUARI_HorIniSab_b'=>'required',
            'USUARI_HorFinSab_b'=>'required',
            'USUARI_HorIniDom_b'=>'required',
            'USUARI_HorFinDom_b'=>'required',
            'USUARI_HorIniFes_b'=>'required',
            'USUARI_HorFinFes_b'=>'required',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'USUARI_Foto______b.required'=>'La foto es requerida',
        ];
        $this->validate($request, $campos, $mensaje);

        $datosUsuari = request()->except('_token');
        if($request->hasFile('USUARI_Foto______b')){
            $datosUsuari['USUARI_Foto______b']=$request->file('USUARI_Foto______b')->store('uploads','public');
        }
        $clave = hash('sha256', $datosUsuari['USUARI_Clave_____b']);
        $datosUsuari['USUARI_Clave_____b'] = $clave;
        Usuari::insert($datosUsuari);
        //response()->json($datosUsuari);
        return redirect('usuari')->with('mensaje','Usario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function show(Usuari $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuari=Usuari::findOrFail($id);
        return view('usuari.edit', compact('usuari') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'USUARI_Nombre____b'=>'required|string|max:255',
            'USUARI_Correo___b'=>'required|email',
            'USUARI_Identific_b'=>'required|string|max:20',
            'USUARI_Clave_____b'=>'required|string|max:255',
            'USUARI_Cargo_____b'=>'required|string|max:50',
            'USUARI_HorIniLun_b'=>'required',
            'USUARI_HorFinLun_b'=>'required',
            'USUARI_HorIniMar_b'=>'required',
            'USUARI_HorFinMar_b'=>'required',
            'USUARI_HorIniMie_b'=>'required',
            'USUARI_HorFinMie_b'=>'required',
            'USUARI_HorIniJue_b'=>'required',
            'USUARI_HorFinJue_b'=>'required',
            'USUARI_HorIniVie_b'=>'required',
            'USUARI_HorFinVie_b'=>'required',
            'USUARI_HorIniSab_b'=>'required',
            'USUARI_HorFinSab_b'=>'required',
            'USUARI_HorIniDom_b'=>'required',
            'USUARI_HorFinDom_b'=>'required',
            'USUARI_HorIniFes_b'=>'required',
            'USUARI_HorFinFes_b'=>'required',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];
        if($request->hasFile('USUARI_Foto______b')){
            $campos=['USUARI_Foto______b'=>'required|max:400kb|mimes:jpeg,png,jpg'];
            $mensaje=['USUARI_Foto______b.required'=>'La foto es requerida'];
        };
        $this->validate($request, $campos, $mensaje);


        $datosUsuari = request()->except(['_token','_method','updated_at']);
        if($request->hasFile('USUARI_Foto______b')){
            $usuari=Usuari::findOrFail($id);
            Storage::delete('public/'.$usuari->USUARI_Foto______b);
            $datosUsuari['USUARI_Foto______b']=$request->file('USUARI_Foto______b')->store('uploads','public');
        }
        $clave = hash('sha256', $datosUsuari['USUARI_Clave_____b']);
        $datosUsuari['USUARI_Clave_____b'] = $clave;
        Usuari::where('id','=',$id)->update($datosUsuari);
        $usuari=Usuari::findOrFail($id);
        //return view('usuari.edit', compact('usuari') );

        return redirect('usuari')->with('mensaje','Usario modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuari=Usuari::findOrFail($id);
        if(Storage::delete('public/'.$usuari->USUARI_Foto______b)){
            Usuari::destroy($id);
        }
        //return redirect('usuari');
        return redirect('usuari')->with('mensaje','Usario eliminado');
    }
}
