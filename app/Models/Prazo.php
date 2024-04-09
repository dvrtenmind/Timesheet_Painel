<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Prazo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_objeto',
        'tabela',
        'id_responsavel',
        'id_executor',
        'inicio_previsto',
        'fim_previsto',
        'inicio_efetivo',
        'fim_efetivo',
        'tipo_status_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'id_objeto' => 'string',
        'id_responsavel' => 'string',
        'id_executor' => 'string',
        'tipo_status_id' => 'string',
        'inicio_previsto' => 'date',
        'fim_previsto' => 'date',
        'inicio_efetivo' => 'date',
        'fim_efetivo' => 'date'
    ];

    // Relacionamento com o modelo TipoStatus
    public function tipoStatus()
    {
        return $this->belongsTo(TipoStatus::class, 'tipo_status_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
