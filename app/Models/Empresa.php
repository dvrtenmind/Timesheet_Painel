<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cnpj',
        'contratante',
        'tipo_area_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'tipo_area_id' => 'string',
        'contratante' => 'boolean'
    ];

    // Relacionamento com o modelo TipoArea
    public function tipoArea()
    {
        return $this->belongsTo(TipoArea::class, 'tipo_area_id');
    }

    // Relacionamento com o modelo Empreendimento
    public function empreendimentos()
    {
        return $this->hasMany(Empreendimento::class, 'empresa_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
