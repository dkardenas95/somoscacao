<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Toke
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $token
 * @property Carbon|null $espires_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Toke extends Model
{
	protected $table = 'tokes';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'espires_at' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'user_id',
		'token',
		'espires_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
