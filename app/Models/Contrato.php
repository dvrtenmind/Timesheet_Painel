<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'numero_ctt',
        'empresa_id',
        'responsavel_id',
        'gestor_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'empresa_id' => 'string',
        'responsavel_id' => 'string',
        'gestor_id' => 'string'
    ];

    // Relacionamento com o modelo Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    // Relacionamento com os modelos Pessoa (responsável e gestor)
    public function responsavel()
    {
        return $this->belongsTo(Funcionario::class, 'responsavel_id');
    }

    public function gestor()
    {
        return $this->belongsTo(Cliente::class, 'gestor_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
