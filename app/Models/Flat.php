<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;
    protected $fillable=[
     'flat_id',
     'appartment_id',
     'tenant_name',
     'flat_no',
     'no_of_rooms',
     'mobile_number',

    ];
    protected $primaryKey='flat_id';
}
