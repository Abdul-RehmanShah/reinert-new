<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class floor extends Model
{
    protected $table = 'floor';
    use HasFactory;
    protected $fillable = [
        'building_id',
        'Name',
        'size',
        'NoOfOffices'
    ];
}