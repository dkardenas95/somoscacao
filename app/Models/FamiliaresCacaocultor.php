<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FamiliaresCacaocultor
 * 
 * @property int $id
 * @property string $nombre
 * @property string $parentesco
 * @property string $edad
 * @property string $nivel_educativo
 * @property int $id_user
 * @property Carbon|null $createdAt
 * 
 * @property User $user
 *
 * @package App\Models
 */
class FamiliaresCacaocultor extends Model
{
	protected $table = 'familiares_cacaocultor';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'createdAt' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'parentesco',
		'edad',
		'nivel_educativo',
		'id_user',
		'createdAt'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
