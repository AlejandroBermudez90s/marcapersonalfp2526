<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FamiliaProfesionalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $familiaProfesional = parent::toArray($request);
        $familiaProfesional['ciclos'] = CicloResource::collection($this->ciclos);
        unset($familiaProfesional['created_at']);
        unset($familiaProfesional['updated_at']);
<<<<<<< HEAD

=======
>>>>>>> b787e46d1b9ad8bc91201eecd04ed6260afc6094
        return $familiaProfesional;
    }
}
