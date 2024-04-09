<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Ativo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ativo',
        'centro_custo',
        'pedido_venda',
        'contrato_id',
        'tipo_venda_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'contrato_id' => 'string',
        'tipo_venda_id' => 'string',
        'pedido_venda' => 'string'
    ];

    // Relacionamento com o modelo Contrato
    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    // Relacionamento com o modelo TipoVenda
    public function tipoVenda()
    {
        return $this->belongsTo(TipoVenda::class, 'tipo_venda_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
