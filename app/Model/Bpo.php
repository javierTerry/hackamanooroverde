<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bpo extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bpo';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','PROYECTO', 'CLIENTE', 'PROVEEDOR', 'FECHAINI', 'FECHAFIN', 'FECHACOMPRA','COSTOCOMPRO', 'COSTOREAL', 'PRECIOVENTA', 'AVANCE'];
	
	


}
