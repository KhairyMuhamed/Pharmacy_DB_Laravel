<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table ='patient';
    protected $fillable = [
        'P_id',
        'P_Name',
        'National_id',
        'phone',
                          ];

}

