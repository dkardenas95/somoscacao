<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamenBpa
 * 
 * @property int $id
 * @property int $id_user
 * @property string $pregunta
 * @property string $seccion
 * @property string $respuesta
 * @property int $valor
 * @property Carbon|null $createdAt
 * @property Carbon|null $updatedAt
 * 
 * @property User $user
 *
 * @package App\Models
 */
class ExamenBpa extends Model
{
	protected $table = 'examen_bpa';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'valor' => 'int',
		'createdAt' => 'datetime',
		'updatedAt' => 'datetime'
	];

	protected $fillable = [
		'id_user',
		'pregunta',
		'seccion',
		'respuesta',
		'valor',
		'createdAt',
		'updatedAt'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
