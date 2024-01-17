<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $table = 'building';
    use HasFactory;
    protected $fillable = [
        'Name',
        'NoOfFloors'
    ];
}
