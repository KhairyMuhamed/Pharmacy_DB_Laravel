<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drugs extends Model
{
    use HasFactory;
    
    protected $tabel = 'drugs';
    protected $fillable = ['drug_trade_name','type_of_drug','produce_date','expire_date','medication_no'];

}
