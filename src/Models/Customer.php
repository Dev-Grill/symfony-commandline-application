<?php

namespace Emeka\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = [
    	'sex',
    	'email', 
    	'image', 
    	'location', 
    	'last_name', 
  		'first_name',
    	'phone_number', 
    ];
}