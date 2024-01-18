<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contract;
use App\Models\customer;
use App\Models\office;

class RentalController extends Controller
{
    public function index()
    {
        // Fetch all contracts from the 'contract' table in the database
        $contract = Contract::all();

        // Pass the contracts data to the contract view
        return view('rental', ['contract' => $contract]);
    }
   

    public function createView()
    {
        return view('create_rental');
    }

    
    public function stores(Request $request){
        $data = $request->validate([
             'customer_id'=>'required',
             'Vollname'=>'nullable',
             'office_id'=>'required',
             'Office_Name'=> 'nullable',
             'Start_date'=> 'required|date',
             'End_date'=> 'required|date',
             'Contract_Period'=> 'required|numeric',
             'Year_Increment'=> 'required|numeric',
             'MieteProM2'=> 'required|numeric',
             'Reinigung_Kosten'=> 'required|numeric', 
             'Extra_Land_size'=> 'required|numeric',
             'Extra_Land_Miete_ProM2'=> 'required|numeric',
             'No_Of_Park_Platz'=> 'required|numeric',
             'Pro_Park_Platz_Mieten'=> 'required|numeric',
             'Nebenkosten'=> 'required|numeric',
             'docs_upload' => 'nullable',
             
        ]);

        $fileName = null;

        // if ($request->hasFile('docs_upload')) {
        //     $file = $request->file('docs_upload');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->storeAs('documents', $fileName, 'public'); 
        // }

        if ($request->hasFile('docs_upload')) {
            $file = $request->file('docs_upload');
        
            // Replace spaces with underscores in the original file name
            $originalFileName = str_replace(' ', '_', $file->getClientOriginalName());
        
            // Concatenate the timestamp and modified file name
            $fileName = time() . '_' . $originalFileName;
        
            // Store the file with the modified name
            $file->storeAs('documents', $fileName, 'public'); 
        }


        // Fetch customer_name from the 'customer' table using customer_id
        $customer_name = customer::find($data['customer_id'])->Vollname;

        // Fetch the 'size' from the 'office' table
        $officeSize = office::find($data['office_id'])->size;

        // Fetch the 'Office_Name' from the 'office' table
        $office_name = office::find($data['office_id'])->Name;

        // Fetch 'steuer_Prozent' from the 'customer' table
        $steuerProzent = customer::find($data['customer_id'])->steuer_Prozent;

        //Removing Extra land size from total size
        $officeSize = $officeSize - $data['Extra_Land_size'];

         // Calculate 'Kalt_Miete' based on 'MieteProM2' and 'size'

        $kaltMiete = $data['MieteProM2'] * $officeSize;

         // Calculate 'Net_Extra_Land_Mieten' based on 'Extra_Land_size' and 'Extra_Land_Miete_ProM2'
        $netExtraLandMieten = $data['Extra_Land_size'] * $data['Extra_Land_Miete_ProM2'];

        // Calculate 'Net_Park_Platz_Mieten' based on 'No_Of_Park_Platz' and 'Pro_Park_Platz_Mieten'
        $netParkPlatzMieten = $data['No_Of_Park_Platz'] * $data['Pro_Park_Platz_Mieten'];

         // Calculate 'Net_Kalt_Miete' based on the sum of various components
        $netKaltMiete = $kaltMiete + $data['Reinigung_Kosten'] + $netExtraLandMieten + $netParkPlatzMieten;

        // Calculate 'Steuer' based on 'Net_Kalt_Miete' and 'steuer_Prozent'
        $steuer = $netKaltMiete * $steuerProzent / 100;

        // Calculate 'Warm_Miete_ohne_Nebenkosten' based on the sum of 'Net_Kalt_Miete' and 'Steuer'
        $warmMieteOhneNebenkosten = $netKaltMiete + $steuer;

        //Adding back Extra land size to total size
        $officeSize = $officeSize + $data['Extra_Land_size'];

        // Calculate Nebankosten
        $Nebenkosten = $data['Nebenkosten']*$officeSize;

        // Calculate 'Nebenkosten_mit_Steuer' based on 'Nebenkosten' and 'steuer_Prozent'
        $nebenkostenMitSteuer = $Nebenkosten * $steuerProzent / 100 + $Nebenkosten;

        // Check if 'Nebenkosten_mit_Steuer' is 0, then set it to 'Nebenkosten'
        if ($nebenkostenMitSteuer == 0) {
            $nebenkostenMitSteuer =  $Nebenkosten;
        }
        // Calculate 'Warm_Miete' based on the sum of 'Warm_Miete_ohne_Nebenkosten' and 'Nebenkosten_mit_Steuer'
        $warmMiete = $warmMieteOhneNebenkosten + $nebenkostenMitSteuer;

        // Create a new instance of the Contract model
        $newContract = new Contract;

        // Set the table name to 'contract'
        $newContract->setTable('contract');

        // Assign the data to the model properties
        $newContract->customer_id = $data['customer_id'];
        $newContract->Vollname = $customer_name;
        $newContract->office_id = $data['office_id'];
        $newContract->Office_Name = $office_name;
        $newContract->Start_date = date('Y-m-d', strtotime($data['Start_date']));
        $newContract->End_date = date('Y-m-d', strtotime($data['End_date']));
        $newContract->Contract_Period = $data['Contract_Period'];
        $newContract->Year_Increment = $data['Year_Increment'];
        $newContract->office_Size =  $officeSize;
        $newContract->MieteProM2 = $data['MieteProM2'];
        $newContract->Kalt_Miete = $kaltMiete;
        $newContract->Reinigung_Kosten = $data['Reinigung_Kosten'];
        $newContract->Extra_Land_size = $data['Extra_Land_size'];
        $newContract->Extra_Land_Miete_ProM2 = $data['Extra_Land_Miete_ProM2'];
        $newContract->Net_Extra_Land_Mieten = $netExtraLandMieten;
        $newContract->No_Of_Park_Platz = $data['No_Of_Park_Platz'];
        $newContract->Pro_Park_Platz_Mieten = $data['Pro_Park_Platz_Mieten'];
        $newContract->Net_Park_Platz_Mieten = $netParkPlatzMieten;
        $newContract->Net_Kalt_Miete = $netKaltMiete;
        $newContract->Steuer = $steuer;
        $newContract->Warm_Miete_ohne_Nebenkosten = $warmMieteOhneNebenkosten;
        $newContract->Nebenkosten = $Nebenkosten;
        $newContract->Nebenkosten_mit_Steuer = $nebenkostenMitSteuer;
        $newContract->Warm_Miete = $warmMiete;
        $newContract->docs_upload = $fileName;

        // Save the new contract to the database
        $newContract->save();

        // Optionally, you can redirect the user to a specific page after saving
        return redirect(route('rental'))->with('success', 'Customer added successfully');
    }
    
}

