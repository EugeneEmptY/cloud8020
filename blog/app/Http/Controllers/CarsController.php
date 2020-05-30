<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cars;
use App\Car_fleets;
use App\User;

class CarsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::orderBy('id', 'desc')->paginate(10);
        return view('cars.index')->with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create', ['cars' => [], 'car_fleets' => Car_fleets::get()]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'carNumber' => 'required|unique:cars',
            'driverName' => 'required'
        ]);

        // Create Car
        $cars = new Cars();
        $cars->carNumber = $request->Input('carNumber');
        $cars->driverName = $request->Input('driverName');
        $cars->user_id = auth()->user()->id;
        $cars->save();
        $cars->car_fleets()->attach($request->input('id'));

        return redirect('/cars')->with('success', 'Car created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Cars::find($id);
        return view('cars.show')->with('cars', $cars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Cars::find($id);

        if(auth()->user()->id !== $cars->user_id){
            return redirect('/cars')->with('error', 'Unauthoraized page');      
        }

        return view('cars.edit', ['cars' => [], 'car_fleets' => Car_fleets::get()])->with('cars', $cars);
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
        $this->validate($request, [
            'carNumber' => 'required',
            'driverName' => 'required'
        ]);

        // Create Car
        $cars = Cars::find($id);
        $cars->carNumber = $request->Input('carNumber');
        $cars->driverName = $request->Input('driverName');
        $cars->save();
        $cars->car_fleets()->sync($request->input('id'));

        return redirect('/cars')->with('success', 'Car updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        return redirect('/cars')->with('success', 'Car deleted');
    }
}
