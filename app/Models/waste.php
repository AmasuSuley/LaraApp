<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waste extends Model
{
    use HasFactory;
    protected $fillable = [
        
         'Account_name',
        'waste_type',
        'street_name',
        'house_number',
        'phone_number',
    
        
    ];
}
