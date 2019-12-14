<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Car::all();
        return view('Cars.IndexCar',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cars.CreateCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'name'=> ['required','min:'],
            'color'=> 'required',
            'company'=> 'required',                
        ]);
   
    car::create($validatedData);
          return redirect('/CreateCar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {       
            // return $car;
      return view('Cars.ShowCar',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('Cars.EditCar',compact('car'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $validatedData = request()->validate([
                'name'=> 'required',
                'color'=> 'required',
                'company'=> 'required',
                    
            ]);
       

         /*$car->name = request('name');
     $car->color = request('color');
         $car->company = request('company');
          $car->save();
        dd('updated');
        return'ok';*/
        $car->update($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {

            $car->delete();
            return redirect('/IndexCar');
        }
}
