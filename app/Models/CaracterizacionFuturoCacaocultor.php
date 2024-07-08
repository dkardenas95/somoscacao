<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaracterizacionFuturoCacaocultor
 * 
 * @property int $id
 * @property string|null $rentabilidad_baja_cacao
 * @property string|null $precios_inestables
 * @property string|null $actividad_sacrificada
 * @property string|null $beneficio_para_intermediarios
 * @property string|null $diversificacion_ingresos
 * @property string|null $crear_negocio_propio
 * @property string|null $no_conocimiento_otras_areas
 * @property int $id_user
 * @property Carbon|null $createdAt
 * @property Carbon|null $updatedAt
 * 
 * @property User $user
 *
 * @package App\Models
 */
class CaracterizacionFuturoCacaocultor extends Model
{
	protected $table = 'caracterizacion_futuro_cacaocultor';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'createdAt' => 'datetime',
		'updatedAt' => 'datetime'
	];

	protected $fillable = [
		'rentabilidad_baja_cacao',
		'precios_inestables',
		'actividad_sacrificada',
		'beneficio_para_intermediarios',
		'diversificacion_ingresos',
		'crear_negocio_propio',
		'no_conocimiento_otras_areas',
		'id_user',
		'createdAt',
		'updatedAt'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
