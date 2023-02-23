<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "usuario" => $this->usuario,
            "fecha_creacion" => $this->created_at,
            "fecha_modificacion" => $this->updated_at,
            "estatus" => $this->estatus,
            "deleted" => $this->deleted,
        ];
    }
}
