<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $cars = Car::
        where('name', 'like', '%' . $search .'%')
        ->orWhere('plat', 'like', '%' . $search .'%')
        ->orWhere('price', 'like', '%' . $search .'%')
        ->latest()
        ->paginate(10);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'name'  =>  'required',
            'plat'  =>  'required',
            'warna'  =>  'required',
            'tahun'  =>  'required',
            'tipe'  =>  'required',
            'cc'  =>  'required',
            'description'  =>  'required',
            'price'  =>  'required|integer',
            'image'  =>  'required',
            'status'  =>  'required',
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('cars');
        }

        Car::create($data);

        return redirect()->route('car.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Car $car)
    {
        return view('cars.edit', ['car'=> $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        // dd($car);
        $data = $request->validate([
            'name'  =>  'required',
            'plat'  =>  'required',
            'warna'  =>  'required',
            'tahun'  =>  'required',
            'tipe'  =>  'required',
            'cc'  =>  'required',
            'description'  =>  'required',
            'price'  =>  'required|integer',
            // 'image'  =>  'required',
            'status'  =>  'required',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('cars');
        }

        $car->update($data);

        return redirect()->route('car.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        if($car->image){
            Storage::delete($car->image);
        }
        Car::destroy($car->id);
        return redirect()->route('car.index')->with('success', 'Data berhasil dihapus');
    }
}