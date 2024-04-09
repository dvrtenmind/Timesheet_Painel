<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Geoloc extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_objeto',
        'cep',
        'endereco',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'string',
        'id_objeto' => 'string'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
