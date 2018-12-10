<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class cines extends Model
{
	use SoftDeletes;
	protected $primarykey = 'idcine';
	protected $fillable=['idcine','nombre'];

}