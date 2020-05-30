<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car_fleets;
use App\Cars;

class CarFleetsController extends Controller
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
        $car_fleets = Car_fleets::orderBy('id', 'desc')->paginate(10);
        return view('car_fleets.index')->with('car_fleets', $car_fleets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_fleets.create', ['car_fleets' => [], 'cars' => Cars::get()]);
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
            'carFleetTitle' => 'required',
            'carFleetAddress' => 'required'
        ]);

        // Create Car
        $car_fleets = new Car_fleets();
        $car_fleets->carFleetTitle = $request->Input('carFleetTitle');
        $car_fleets->carFleetAddress = $request->Input('carFleetAddress');
        $car_fleets->carFleetSchedule = $request->Input('carFleetSchedule');
        $car_fleets->save();
        $car_fleets->cars()->attach($request->input('id'));

        return redirect('/car_fleets')->with('success', 'Car fleet created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car_fleets = Car_fleets::find($id);
        return view('car_fleets.show')->with('car_fleets', $car_fleets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_fleets = Car_fleets::find($id);
        return view('car_fleets.edit', ['car_fleets' => [], 'cars' => Cars::get()])->with('car_fleets', $car_fleets);
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
            'carFleetTitle' => 'required',
            'carFleetAddress' => 'required'
        ]);

        // Create Car
        $car_fleets = Car_fleets::find($id);
        $car_fleets->carFleetTitle = $request->Input('carFleetTitle');
        $car_fleets->carFleetAddress = $request->Input('carFleetAddress');
        $car_fleets->carFleetSchedule = $request->Input('carFleetSchedule');
        $car_fleets->save();
        $car_fleets->cars()->attach($request->input('id'));
        //Cars: {{$car_fleets->cars()->pluck('carNumber')->implode(' ')}}

        return redirect('/car_fleets')->with('success', 'Car fleet updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_fleets = Car_fleets::find($id);
        $car_fleets->delete();
        return redirect('/car_fleets')->with('success', 'Car fleet deleted');
    }
}
