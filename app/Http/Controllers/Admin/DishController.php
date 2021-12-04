<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Typeofdish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dish.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeofdishes = Typeofdish::all();
        return view('admin.dish.create', compact('typeofdishes'));
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
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image'],
            'typeofdish_id' => ['required', 'exists:typeofdishes,id'],
            'price' => 'required|numeric|min:0'
        ]);
             
        // $dish = new Dish();
        // $dish->name = $data['name'];
        // $dish->description = $data['description'];
        // $dish->typeofdish_id = $request->typeofdish_id;
        // $image = $request->file('image');
        // $storedPath = $image->move('hinhanh', $image->getClientOriginalName());
        // $dish->image= $image->getClientOriginalName();
        // $dish->save();

        $data['image'] = $request->file('image')->store('public/dishes');

        $dish = Dish::create($data);
        $dish->dishprices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        
        return redirect()->route('admin.dishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return view('admin.dish.show', [
            'dish' =>Dish::findOrFail($id)           
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $typeofdishes = Typeofdish::all();
        return view('admin.dish.edit', compact('dish', 'typeofdishes')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate([
            
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image'],
            'typeofdish_id' => ['required', 'exists:typeofdishes,id'],
            'price' => 'required|numeric|min:0'
        ]);
        $data['image'] = $request->file('image')->store('public/dishes');
        $dish->update($data);
        $dish->dishprices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        return redirect()->route('admin.dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->dishprices()->delete();
        $dish->delete();
        return redirect()->route('admin.dishes.index');

    }
}
