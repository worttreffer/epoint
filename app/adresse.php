<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adresse extends Model
{
    protected $fillable = [
		'user_id','typ','Anrede','Name','Vorname','ZusatzName','Strasse','Hausnummer','Postleitzahl','Ortsname','Land','Notizen',
	];
	//
}
