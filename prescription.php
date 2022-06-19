<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $table ='prescription';
    protected $fillable = [
        'Serial_No',
        'P_id',
        'Drug_Trade_Name',
        'P_Date',
        'Quantity',
        'DR_Name',

                          ];

}

