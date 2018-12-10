<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class empleados extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'ide';
	
	protected $fillable=['ide','nombre','edad','sexo','idcine'];

}