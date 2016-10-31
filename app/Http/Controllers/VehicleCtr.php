<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vehicle;
class VehicleCtr extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function display_vehicle($id) {
        $vehicle = Vehicle::find($id);
        if (!empty($vehicle)) {
            return view('vehicle.display_vehicle', compact('vehicle'));
        } else {
            return redirect('home');
        }
    }

   private function form_validation($request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'contact_number' => 'required|size:10',
            'email' => 'required|email',
            'manufacturer' => 'required',
            'type' => 'required',
            'year' => 'required|numeric|min:1910|max:' . date('Y'),
            'colour' => 'required',
            'mileage' => 'required|numeric',
        ]);
    }
    public function add_new(Request $request) {
        $this->form_validation($request);
        $vehicle = new Vehicle([
            'owner_firstname' => $request->name,
            'owner_lastname' => $request->surname,
            'owner_email' => $request->email,
            'owner_contact_number' => $request->contact_number,
            'manufacturer' => $request->manufacturer,
            'type' => $request->type,
            'year' => $request->year,
            'colour' => $request->colour,
            'mileage' => $request->mileage,
        ]);
        
        $vehicle->save();
        return redirect('/home');
    }

    public function edit_vehicle($id) 
    {       
        $vehicle = Vehicle::find($id);

        if (!empty($vehicle)) {
            return view('vehicle.edit', compact('vehicle'));
        } else {
            return redirect('/home');
        }
    }

    public function edit(Request $request, $id) {

        $this->form_validation($request);
        $vehicle = Vehicle::find($id);
        if (!empty($vehicle)) {
        $vehicle->owner_firstname = $request->name;
        $vehicle->owner_lastname = $request->surname;
        $vehicle->owner_email = $request->email;
        $vehicle->owner_contact_number = $request->contact_number;
        $vehicle->manufacturer = $request->manufacturer;
        $vehicle->type = $request->type;
        $vehicle->year = $request->year;
        $vehicle->colour = $request->colour;
        $vehicle->mileage = $request->mileage;
        $vehicle->save();

        $response_message = "success";
            return view('vehicle.edit', compact('vehicle','response_message'));
        } else {
            $response_message = "error";
            return redirect('/home');
        }
    }



    public function delete_vehicle($id) {
       $vehicle = Vehicle::find($id);

        if (!empty($vehicle)) {
            $vehicle->delete();
        }
        return redirect('home');
    }
}
