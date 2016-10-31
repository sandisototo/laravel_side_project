<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleAPICtr extends Controller
{
  
	public function display_all_vehicles() {
		header('Content-Type: application/json');
		$vehicles = Vehicle::all()->toArray();
		return response()->json($vehicles); die();
	}
}
