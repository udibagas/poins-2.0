<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return array_merge($item->toArray(), [
                    'customer' => $item->customer ? $item->customer->name : '',
                    'contractor' => $item->contractor ? $item->contractor->name : '',
                ]);
            })
        ];
    }
}
