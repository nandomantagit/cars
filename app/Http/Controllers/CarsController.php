<?php

namespace App\Http\Controllers;
use App\Car;
use App\Mail\Welcome;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    
    public function index()
    {
        $cars = Car::all();
        //return view('students.index', ['students' => $students] );
        return view('cars.index', compact('cars') );
    }

    
    public function create()
    {
        return view ('cars.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'produced_on' => 'required',
            'email' => 'required'
         ]);
         
         $user = Car::create(
            request(['make', 'model', 'produced_on', 'email'])
         );
         //$user = Car::create($request->all());
         \Mail::to($user)->send(new Welcome($user));

        return redirect('/cars')->with('status', 'Data Mobil Berhasil Ditambahkan');
    }

   
    public function show(Car $car)
    {
        //$cars = Car::all();
        //return view('cars.index', ['cars' => $cars] );
        //return view ('cars.show', compact('car'));
    }

   
    public function edit(Car $car)
    {
        return view ('cars.edit', compact('car'));
    }

   
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'produced_on' => 'required',
            'email' => 'required'
         ]);

        Car::where('id', $car->id)
                ->update([
                    'make' => $request->make,
                    'model' => $request->model,
                    'produced_on' => $request->produced_on,
                    'email' => $request->email
                ]);
        return redirect('/cars')->with('status', 'Data Mobil Berhasil Diubah!');
    }


    public function destroy(Car $car)
    {
        Car::destroy($car->id);
        return redirect('/cars')->with('status', 'Data Mobil Berhasil Dihapus!');
    }


     public function default(Request $request, Car $car)
    {
        
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'produced_on' => 'required',
            'email' => 'required'
         ]);

        Car::where('id', $car->id) // gimana ya caranya kwkwkw?
                ->update([
                    'make' => $request->make,
                    'model' => $request->model,
                    'produced_on' => $request->produced_on,
                    'email' => $request->email
                ]);
        return redirect('/cars')->with('status', 'Data menjadi Default!');
    }


}