<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamenBpaEstado
 * 
 * @property int $id
 * @property int $id_user
 * @property string $estado
 * @property string $secciones_insertadas
 * @property Carbon|null $createdAt
 * @property Carbon|null $updatedAt
 * 
 * @property User $user
 *
 * @package App\Models
 */
class ExamenBpaEstado extends Model
{
	protected $table = 'examen_bpa_estado';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'createdAt' => 'datetime',
		'updatedAt' => 'datetime'
	];

	protected $fillable = [
		'id_user',
		'estado',
		'secciones_insertadas',
		'createdAt',
		'updatedAt'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
