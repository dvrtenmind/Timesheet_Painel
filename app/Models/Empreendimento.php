<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Empreendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'empresa_id',
        'tipo_empreendimento_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'empresa_id' => 'string',
        'tipo_empreendimento_id' => 'string'
    ];

    // Relacionamento com o modelo Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    // Relacionamento com o modelo TipoEmpreendimento
    public function tipoEmpreendimento()
    {
        return $this->belongsTo(TipoEmpreendimento::class, 'tipo_empreendimento_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
