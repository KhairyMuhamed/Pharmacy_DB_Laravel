<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesprocess extends Model
{
    use HasFactory;
    
    protected $tabel = 'salesprocess';
    protected $fillable = ['D_parcode','Drug_Trade_Name','ph_name','quantity','type_of_sale'];
}
