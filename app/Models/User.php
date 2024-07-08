<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $nombre
 * @property string $sexo
 * @property string $edad
 * @property string $email
 * @property string $celular
 * @property string $nivel_educativo
 * @property string|null $enfoque_diferencial
 * @property string $estado_civil
 * @property string $anios_en_region
 * @property string $ingresos_mensuales_familia
 * @property Carbon|null $createdAt
 * @property Carbon|null $updatedAt
 * @property string|null $token
 * @property Carbon|null $token_expiration
 * 
 * @property Collection|CaracterizacionFuturoCacaocultor[] $caracterizacion_futuro_cacaocultors
 * @property Collection|EncuestaCaracterizacion[] $encuesta_caracterizacions
 * @property Collection|ExamenBpa[] $examen_bpas
 * @property Collection|ExamenBpaEstado[] $examen_bpa_estados
 * @property Collection|FamiliaresCacaocultor[] $familiares_cacaocultors
 * @property Collection|Toke[] $tokes
 * @property Collection|Variedade[] $variedades
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'createdAt' => 'datetime',
		'updatedAt' => 'datetime',
		'token_expiration' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'nombre',
		'sexo',
		'edad',
		'email',
		'celular',
		'nivel_educativo',
		'enfoque_diferencial',
		'estado_civil',
		'anios_en_region',
		'ingresos_mensuales_familia',
		'createdAt',
		'updatedAt',
		'token',
		'token_expiration'
	];

	

	public function caracterizacion_futuro_cacaocultors()
	{
		return $this->hasMany(CaracterizacionFuturoCacaocultor::class, 'id_user');
	}

	public function encuesta_caracterizacions()
	{
		return $this->hasMany(EncuestaCaracterizacion::class, 'id_user');
	}

	public function examen_bpas()
	{
		return $this->hasMany(ExamenBpa::class, 'id_user');
	}

	public function examen_bpa_estados()
	{
		return $this->hasMany(ExamenBpaEstado::class, 'id_user');
	}

	public function familiares_cacaocultors()
	{
		return $this->hasMany(FamiliaresCacaocultor::class, 'id_user');
	}

	public function tokes()
	{
		return $this->hasMany(Toke::class);
	}

	public function variedades()
	{
		return $this->hasMany(Variedade::class, 'id_user');
	}
}
