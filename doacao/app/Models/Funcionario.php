<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\LoginFuncController;

class Funcionario extends Authenticatable
{
    protected $table = "funcionarios";
	
	public $timestamps = false;

	protected $casts = [
		'ativo' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'email',
		'password',
		'remember_token',
		'ativo'
	];

	public function contas()
	{
		return $this->belongsToMany(\App\Models\Conta::class, 'usuarios_contas', 'usuario_pfk', 'conta_pfk');
	}
	
}

