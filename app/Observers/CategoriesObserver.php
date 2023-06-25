<?php

namespace App\Observers;

use App\Events\UpdateData;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoriesObserver
{

    /**
     * @param Model $model
     * @return void
     */
    public function creating(Model $model): void
    {
        if($model->whereSlug($model->title)->exists()) {
            $model->slug = Str::slug($model->title . "" . Str::uuid());
        }else {
            $model->slug = Str::slug($model->title);
        }
        event(new UpdateData($model));
    }

    /**
     * @param Model $model
     * @return void
     */
    public function updating(Model $model): void
    {
        if($model->whereSlug($model->title)->exists()) {
            $model->slug = Str::slug($model->title . "" . Str::uuid());
        }else {
            $model->slug = Str::slug($model->title);
        }

        event(new UpdateData($model));
    }

}
