<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MovementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'operation' => $this->operation,
            'value' => number_format($this->value, 2, ',', '.'),
            'day' => Carbon::parse($this->created_at)->format('d/m/Y')
        ];
    }
}
