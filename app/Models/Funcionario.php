<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pessoa_id',
        'tipo_cargo_id',
        'ativo',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'pessoa_id' => 'string',
        'tipo_cargo_id' => 'string',
        'ativo' => 'boolean'
    ];

    // Relacionamento com o modelo Pessoa
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
