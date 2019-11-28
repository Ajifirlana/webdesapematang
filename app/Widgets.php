<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Widgets extends Model {

	protected $table = 'widget';
    protected $fillable =['nama_widget','isi_widget'];

}
