<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{
    public function index()
    {

        $customer = Customer::all(); // Fetch all customers from the database
        return view('customer',   ['customer' => $customer]);
    }
    
    public function createView()
    {
        return view('createcustomer');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
             'Vorname'=> 'required',
             'Nachname'=> 'required',
             'Vollname'=> 'required',
             'Email'=> 'email:rfc,dns',
             'kontakt'=> 'numeric',
             'konto_nummer'=> '',
             'steuer_id'=> '',
             'steuer_Prozent'=> 'required|numeric',
        ]);

        // Create a new instance of the Customer model
        $newCustomer = new Customer;

        // Set the table name to 'customer'
        $newCustomer->setTable('customer');

        // Assign the data to the model properties
        $newCustomer->Vorname = $data['Vorname'];
        $newCustomer->Nachname = $data['Nachname'];
        $newCustomer->Vollname = $data['Vollname'];
        $newCustomer->Email = $data['Email'];
        $newCustomer->kontakt = $data['kontakt'];
        $newCustomer->konto_nummer = $data['konto_nummer'];
        $newCustomer->steuer_id = $data['steuer_id'];
        $newCustomer->steuer_Prozent = $data['steuer_Prozent'];

        // Save the new customer to the database
        $newCustomer->save();

        // Optionally, you can redirect the user to a specific page after saving
        return redirect(route('createcustomer'))->with('success', 'Customer added successfully');
    }


}
