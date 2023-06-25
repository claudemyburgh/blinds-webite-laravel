<?php

namespace App\Observers;

use App\Events\UpdateData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductsObserver
{

    /**
     * @param Model $model
     * @return void
     */
    public function creating(Model $model): void
    {
        $model->slug = Str::slug($model->title ." ". $model->product_range);
        event(new UpdateData($model));
    }

    /**
     * @param Model $model
     * @return void
     */
    public function updating(Model $model):void {
        event(new UpdateData($model));
    }

}
