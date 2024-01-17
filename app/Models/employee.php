<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    use HasFactory;
    protected $fillable = [
        'Vorname',
        'Nachname',
        'Vollname',
        'Email',
        'kontakt',
        'Designation',
        'Status'
    ];
}
