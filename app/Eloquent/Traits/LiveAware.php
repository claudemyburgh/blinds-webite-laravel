<?php

namespace App\Eloquent\Traits;

use Illuminate\Database\Eloquent\Builder;

trait LiveAware
{

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopeLive(Builder $builder): Builder
    {
        return $builder->where('live', true);
    }


    /**
     * @return bool
     */
    public function isLive()
    {
        return (boolean) $this->live === true;
    }

    /**
     * @return bool
     */
    public function isNotLive()
    {
        return !$this->isLive();
    }

}
