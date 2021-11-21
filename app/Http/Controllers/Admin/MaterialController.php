<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Typematerial;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('admin.material.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typematerials = Typematerial::all();
        return view('admin.material.create', compact('typematerials'));
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
            'typematerial_id' => ['required', 'exists:typematerials,id'],
            // 'price' => 'required|numeric|min:0'
            'price' => ['required', 'exists:typematerials,id']
        ]);

        $material = Material::create($data);
        $material->importprices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        return redirect()->route('admin.materials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $materials = Material::all();
        return view('admin.material.show', compact('materials'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('admin.material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $data = $request->validate([
            //dạng chuỗi
            // 'name' => 'required|string', 
            'name' => ['required', 'string'], //dạng mảng
            'price' => 'required|numeric|min:0'

        ]);
        $material->update($data);
        $material->importprices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        return redirect()->route('admin.materials.index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->importprices()->delete();
        $material->delete();
        return redirect()->route('admin.materials.index');
    }
}
