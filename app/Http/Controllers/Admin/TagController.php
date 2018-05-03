<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    //Control de acceso
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtiene todas las etiquetas, las ordena de manera ascendente a partir del Id y envía  compact('tags') los datos a la vista
        $tags = Tag::orderBy('id', 'ASC')->paginate();

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Llama al formulario de ingreso o creación de etiquetas
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        //Guarda la información ingresada en el formulario de creación de etiquetas
        $tag = Tag::create($request->all());

        return redirect()->route('tags.edit', $tag->id)->with('msj', 'Etiqueta creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Permite listar las etiquetas al detalle
        $tag = Tag::find($id);

        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Al presionar el botón de edición llama al formulario para ello
        $tag = Tag::find($id);

        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        //Actualiza las etiquetas con los datos ingresados en el formulario de edición y cuando actualice regresa al formulario
        $tag = Tag::find($id);

        $tag->fill($request->all())->save();

        return redirect()->route('tags.edit', $tag->id)->with('msj', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Elimina una etiqueta especifica
        $tag = Tag::find($id)->delete();

        return back()->with('msj', 'Etiqueta eliminada con éxito');
    }
}
