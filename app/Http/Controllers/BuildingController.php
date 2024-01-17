<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\building;

class BuildingController extends Controller
{
    public function index()
    {

        $building = Building::all(); // Fetch all buildings from the database
        return view('building',   ['building' => $building]);
    }

    public function createView()
    {
        return view('createbuilding');
    }

    public function stored(Request $request)
    {
        $data = $request->validate([
             'Name'=> 'required',
             'NoOfFloors'=> 'required|numeric',
        ]);

        // Create a new instance of the Building model
        $newBuilding = new Building;

        // Set the table name to 'customer'
        $newBuilding->setTable('building');

        // Assign the data to the model properties
        $newBuilding->Name = $data['Name'];
        $newBuilding->NoOfFloors = $data['NoOfFloors'];

        // Save the new customer to the database
        $newBuilding->save();

        // Optionally, you can redirect the user to a specific page after saving
        return redirect(route('building'))->with('success', 'Building added successfully');
    }
}