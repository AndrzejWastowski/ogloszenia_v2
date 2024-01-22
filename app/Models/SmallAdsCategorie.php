<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallAdsCategorie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'link'];

    protected $table = 'small_ads_categories';

    public function SmallAdsSubCategories()
    {
        return $this->hasMany(SmallAdsSubCategorie::class, 'small_ads_categories_id');
    }
    
    public function getRouteKeyName()
    {
        return 'link'; // Jeśli 'link' to Twoje pole slug
    }

    public function SmallAdsContent()
    {
        return $this->hasMany(SmallAdsContent::class);
    }

}
