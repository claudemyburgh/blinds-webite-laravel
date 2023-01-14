<?php

namespace App\Models;

use App\Eloquent\Traits\MostPopular;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    use MostPopular;


    protected $fillable = ['title', 'slug', 'category_id', 'description', 'excerpt', 'body', 'social_description'];


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }



    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 200, 200);

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_CROP, 400, 400);

        $this->addMediaConversion('normal')
            ->fit(Manipulations::FIT_CROP, 800, 800);

        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_CROP, 1200, 1200);

    }


    /**
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('default')
            ->useFallbackUrl(url('https://barbqvillage.com/wp-content/uploads/woocommerce-placeholder.png'));
    }


}
