<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Aparatur extends Model {

	 protected $table = 'aparatur';
    protected $fillable =['nama','jabatan','image'];


}
