<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Torneo;
use App\Http\Resources\TorneoResource;

class JuegoResource extends JsonResource
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
            'plataforma' => $this->plataforma,
            'edadR' => $this->edadR,
            'nota' => $this->nota,
            'torneos' => TorneoResource::collection($this->torneos)
        ];
    }
}
