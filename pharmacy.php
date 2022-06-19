<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    use HasFactory;
    protected $table ='pharmacy';
    protected $fillable = [
        'Ph_id',
        'Ph_Name',
        'Address',
        'phone',
                          ];

}
