<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typematerial;
use Illuminate\Http\Request;

class TypeMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typematerials = Typematerial::all();
        return view('admin.typematerial.index', compact('typematerials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typematerial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            //dạng chuỗi
            // 'name' => 'required|string', 
            'name' => ['required', 'string'], //dạng mảng
        ]);
        Typematerial::create($data);
        return redirect()->route('admin.typematerials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typematerial  $typematerial
     * @return \Illuminate\Http\Response
     */
    public function show(Typematerial $typematerial)
    {
        return view('admin.typematerial.show', compact('typematerial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typematerial  $typematerial
     * @return \Illuminate\Http\Response
     */
    public function edit(Typematerial $typematerial)
    {
        return view('admin.typematerial.edit', compact('typematerial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typematerial  $typematerial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typematerial $typematerial)
    {
        $data = $request->validate([
            //dạng chuỗi
            // 'name' => 'required|string', 
            'name' => ['required', 'string'], //dạng mảng

        ]);
        $typematerial->update($data);
        return redirect()->route('admin.typematerials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typematerial  $typematerial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typematerial $typematerial)
    {
        $typematerial->delete();
        return redirect()->route('admin.typematerials.index');
    }
}
