<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class contract extends Model
{
    protected $table = 'contract';
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'Vollname',
        'office_id',
        'Office_Name',
        'Start_date',
        'End_date',
        'Contract_Period',
        'office_Size',
        'Year_Increment',
        'MieteProM2',
        'Kalt_Miete',
        'Reinigung_Kosten',
        'Extra_Land_size',
        'Extra_Land_Miete_ProM2',
        'Net_Extra_Land_Mieten',
        'No_Of_Park_Platz',
        'Pro_Park_Platz_Mieten',
        'Net_Park_Platz_Mieten',
        'Net_Kalt_Miete',
        'Steuer',
        'Warm_Miete_ohne_Nebenkosten',
        'Nebenkosten',
        'Nebenkosten_mit_Steuer',
        'Warm_Miete',
        'docs_upload'
    ];
    
}
