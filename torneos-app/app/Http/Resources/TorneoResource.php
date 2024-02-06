<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Juego;
use App\Http\Resources\JuegoResource;

class TorneoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'fechaInicio' => $this->fechaInicio,
            'premio1' => $this->premio1,
            'premio2' => $this->premio2,
            'maxParticipantes' => $this->maxParticipantes,
            'juego' => Juego::find($this->juego_id)->nombre,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
