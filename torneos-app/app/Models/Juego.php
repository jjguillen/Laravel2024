<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Juego extends Model
{
    use HasFactory;

    public function torneos(): HasMany {
        return $this->hasMany(Torneo::class);
    }

    public function torneoPremioMayor(): HasOne {
        return $this->torneos()->one()->ofMany('premio1', 'max');
    }
   
}
