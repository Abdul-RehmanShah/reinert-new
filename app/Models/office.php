<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    use HasFactory;
    protected $table = 'office';
    protected $fillable = [
        'building_id',
        'Name',
        'size',
        'NoOfRooms'
    ];
}
