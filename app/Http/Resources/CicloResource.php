<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CicloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $ciclo = parent::toArray($request);
<<<<<<< HEAD
        // $ciclo['familia_profesional'] = new FamiliaProfesionalResource($this->familiaProfesional);
        $ciclo['familia_profesional'] = $this->familiaProfesional->nombre;
=======
        $ciclo['familia_profesional'] = $this->familiaProfesional->nombre;
        // $ciclo['familia_profesional'] = new FamiliaProfesionalResource($this->familiaProfesional);
>>>>>>> b787e46d1b9ad8bc91201eecd04ed6260afc6094
        return $ciclo;
    }
}
