<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typeofdish;
use Illuminate\Http\Request;

class TypeofdishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeofdishes = Typeofdish::all()->sortByDesc('id')->paginate(4);
        if($key = request()->key){
            $typeofdishes = Typeofdish::where('name','like','%'.$key.'%')->paginate(4);
    }
        return view('admin.typeofdish.index', compact('typeofdishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeofdish.create');
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
        Typeofdish::create($data);
        return redirect()->route('admin.typeofdishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typeofdish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     $typeofdishes = Typeofdish::all();
    //     return view('admin.typeofdish.show', compact('typeofdishes'));
    // }

    public function show($id)
    {
        return view('admin.typeofdish.show', [
            'typeofdish' =>Typeofdish::findOrFail($id)
            
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeofdish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeofdish $typeofdish)
    {
        return view('admin.typeofdish.edit', compact('typeofdish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeofdish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeofdish $typeofdish)
    {
        $data = $request->validate([
            //dạng chuỗi
            // 'name' => 'required|string', 
            'name' => ['required', 'string'], //dạng mảng

        ]);
        $typeofdish->update($data);
        return redirect()->route('admin.typeofdishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeofdish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeofdish $typeofdish)
    {
        $typeofdish->delete();
        return redirect()->route('admin.typeofdishes.index');
    }
}
