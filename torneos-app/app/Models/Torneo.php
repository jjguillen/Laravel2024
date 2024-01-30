<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Juego;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Torneo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'juego',
        'fechaInicio',
        'premio1',
        'premio2',
        'maxParticipantes'
    ];

    public function juego(): BelongsTo
    {
        return $this->belongsTo(Juego::class);
    }
}
