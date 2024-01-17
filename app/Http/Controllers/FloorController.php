<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\floor;


class FloorController extends Controller
{
    public function index()
    {

        $floor = Floor::all(); // Fetch all floors from the database
        return view('floor',   ['floor' => $floor]);
    }

    public function createView()
    {
        return view('createfloor');
    }

  
    public function stor(Request $request)
    {
        $data = $request->validate([
            'building_id'=> 'required',
            'Name'=> 'required',
            'size'=> 'required|numeric',
            'NoOfOffices'=> 'required|numeric',
        ]);

        // Create a new instance of the Floor model
        $newfloor = new Floor;

        // Set the table name to 'customer'
        $newfloor->setTable('floor');

        // Assign the data to the model properties
        $newfloor->building_id = $data['building_id'];
        $newfloor->Name = $data['Name'];
        $newfloor->size = $data['size'];
        $newfloor->NoOfOffices = $data['NoOfOffices'];

        // Save the new customer to the database
        $newfloor->save();

        // Optionally, you can redirect the user to a specific page after saving
        return redirect(route('floor'))->with('success', 'Floor added successfully');
    }
}
