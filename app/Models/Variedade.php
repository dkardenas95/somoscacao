<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Variedade
 * 
 * @property int $id
 * @property string $tipo_cacao
 * @property string $total_arboles
 * @property string $edad
 * @property string $produccion_por_anio
 * @property int $id_user
 * @property Carbon|null $createdAt
 * @property Carbon|null $updatedAt
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Variedade extends Model
{
	protected $table = 'variedades';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'createdAt' => 'datetime',
		'updatedAt' => 'datetime'
	];

	protected $fillable = [
		'tipo_cacao',
		'total_arboles',
		'edad',
		'produccion_por_anio',
		'id_user',
		'createdAt',
		'updatedAt'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
