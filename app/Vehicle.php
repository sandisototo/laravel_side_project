<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
	    use SoftDeletes;
	    protected $dates = ['deleted_at'];

        protected $fillable = [
	    	'owner_firstname', 'owner_lastname', 'owner_email', 'owner_contact_number', 
	    	'manufacturer', 'type', 'year', 'colour', 'mileage'
		];
}
