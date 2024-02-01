<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Juego;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Torneo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaInicio',
        'premio1',
        'premio2',
        'maxParticipantes'
    ];

    public function juego(): BelongsTo
    {
        return $this->belongsTo(Juego::class);
    }

    public function inscritos(): BelongsToMany {
        return $this->belongsToMany(User::class)->withPivot('nivel');
    }
}
