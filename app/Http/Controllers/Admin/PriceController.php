<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        return view('admin.prices.index')->with('prices', $prices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prices.create');

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
            'name' => 'required|unique:prices',
            'value' => 'required|numeric'
        ]);
        $price = Price::create($request->all());

        return redirect()->route('admin.prices.edit', $price)->with('info', 'Precio creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        return view('admin.prices.show')->with('price', $price);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('admin.prices.edit')->with('price', $price);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'name' => 'required|unique:prices,name,' . $price->id,
             'value' => 'required|numeric'

        ]);
        $price->update($request->all());
        return redirect()->route('admin.prices.edit', $price)->with('info', 'Precio actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();
        return redirect()->route('admin.prices.index', $price)->with('info', 'Precio eliminado con éxito');

    }
}
