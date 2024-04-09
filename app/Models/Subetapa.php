<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Subetapa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descricao',
        'etapa_id',
        'empreendimento_id',
        'tipo_recorrencia_id',
        'tipo_etapa_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'etapa_id' => 'string',
        'empreendimento_id' => 'string',
        'tipo_recorrencia_id' => 'string',
        'tipo_etapa_id' => 'string'
    ];

    // Relacionamento com o modelo Etapa
    public function etapa()
    {
        return $this->belongsTo(Etapa::class, 'etapa_id');
    }

    // Relacionamento com o modelo Empreendimento
    public function empreendimento()
    {
        return $this->belongsTo(Empreendimento::class, 'empreendimento_id');
    }

    // Relacionamento com o modelo TipoRecorrencia
    public function tipoRecorrencia()
    {
        return $this->belongsTo(TipoRecorrencia::class, 'tipo_recorrencia_id');
    }

    // Relacionamento com o modelo TipoEtapa
    public function tipoEtapa()
    {
        return $this->belongsTo(TipoEtapa::class, 'tipo_etapa_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
