<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SmallAdsContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id',
    'users_id',
    'name',
    'condition',
    'lead',
    'description',
    'items',
    'price',
    'date_start',
    'date_end',
    'small_ads_categories_id',
    'small_ads_sub_categories_id',
    'small_ads_user_group_id',
    'small_ads_classified_enum',
    'views',
    'contact_phone',
    'contact_email',
    'adresses_id',
    'master_portal',
    'promoted',
    'highlighted',
    'inscription',
    'image_path',
    'adress_ip',
    'port',
    'host',
    'browser',
    'portal_id',
    'status',
    'invoice',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'created_at', 'updated_at',
    ];

    public function getRouteKeyName()
    {
        return 'slug'; // do SEO wyszukiwania
    }

    public function category()
    {
        return $this->belongsTo(SmallAdsCategorie::class, 'small_ads_categories_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SmallAdsSubCategorie::class, 'small_ads_sub_categories_id');
    }

    public function photos()
    {
        return $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id');
    }

    public function topPhoto()
    {
        //$result = $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id')

        $result = $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id')
        ->where('sort',1)
        ->limit(1);
        return $result;
    }

    /**
     * Display the first photo
     * return one database small_ads_photos record.
     */
    public function firstPhotos()
    {
        $result = $this->belongsTo(SmallAdsPhoto::class, 'small_ads_contents_id');

        return $result;
    }

    /**
     * Get the user that owns the SmallAds.
     */
    public function user(): BelongsTo
    {
        $result = $this->belongsTo(User::class, 'users_id');

        return $result;
    }

}