<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
     protected $fillable = ['officename', 'pincode', 'officetype', 'deliverystatus', 'divisionname', 'regionname', 'circlename', 'taluk', 'districtname', 'statename', 'telephone', 'related_suboffice', 'related_headoffice', 'longitude', 'latitude'];
     public $timestamps = false;
}
