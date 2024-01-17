<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\office;

class OfficeController extends Controller
{
    public function index()
    {
        $office = Office::all(); // Fetch all offices from the database
        return view('office',   ['office' => $office]);
    }

    public function createView()
    {
        return view('createoffice');
    }

    public function stoor(Request $request)
    {
        $data = $request->validate([
            'Floor_id'=> 'required',
            'Name'=> 'required',
            'size'=> 'required|numeric',
            'NoOfRooms'=> 'required|numeric',
        ]);

        // Create a new instance of the Floor model
        $newoffice = new Office;

        // Set the table name to 'customer'
        $newoffice->setTable('office');

        // Assign the data to the model properties
        $newoffice->Floor_id = $data['Floor_id'];
        $newoffice->Name = $data['Name'];
        $newoffice->size = $data['size'];
        $newoffice->NoOfRooms = $data['NoOfRooms'];

        // Save the new customer to the database
        $newoffice->save();

        // Optionally, you can redirect the user to a specific page after saving
        return redirect(route('office'))->with('success', 'Office added successfully');
    }
}
