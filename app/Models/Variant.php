<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Variant extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'product_number',
        'cleaning',
        'color',
        'material',
        'pattern',
        'thickness',
        'pattern_width',
        'pattern_height',
        'flame_retardant',
        'printable',
        'popular',
    ];

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
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
