<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Prorrogado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'prazo_id',
        'descricao',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'prazo_id' => 'string'
    ];

    // Relacionamento com o modelo Prazo
    public function prazo()
    {
        return $this->belongsTo(Prazo::class, 'prazo_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
