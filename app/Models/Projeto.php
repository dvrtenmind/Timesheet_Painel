<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Ramsey\Uuid\Uuid;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'numero_projeto',
        'contrato_id',
        'gestor_id',
        'responsavel_id',
        'tipo_recorrencia_id',
        'tipo_entrega_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'contrato_id' => 'string',
        'gestor_id' => 'string',
        'responsavel_id' => 'string',
        'tipo_recorrencia_id' => 'string',
        'tipo_entrega_id' => 'string'
    ];

    // Relacionamento com o modelo Contrato
    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    // Relacionamento com os modelos Pessoa (gestor e responsável)
    public function gestor()
    {
        return $this->belongsTo(Cliente::class, 'gestor_id');
    }

    public function responsavel()
    {
        return $this->belongsTo(Funcionario::class, 'responsavel_id');
    }

    // Relacionamento com os modelos TipoRecorrencia e TipoEntrega
    public function tipoRecorrencia()
    {
        return $this->belongsTo(TipoRecorrencia::class, 'tipo_recorrencia_id');
    }

    public function tipoEntrega()
    {
        return $this->belongsTo(TipoEntrega::class, 'tipo_entrega_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
