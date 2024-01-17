<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $table = 'customer';

    use HasFactory;
    protected $fillable = [
        'Vorname',
        'Nachname',
        'Vollname',
        'Email',
        'kontakt',
        'konto_nummer',
        'steuer_id',
        'steuer_Prozent'
    ];
}
