<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

trait Uuid
{
    use HasUuids;

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}
