<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'url_linkedin',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    // Relacionamento com os modelos Cliente e Funcionario
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'pessoa_id');
    }

    public function funcionario()
    {
        return $this->hasOne(Funcionario::class, 'pessoa_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
