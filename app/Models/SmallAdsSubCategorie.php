<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallAdsSubCategorie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    protected $fillable = ['id', 'small_ads_categories_id', 'name', 'description'];
    
    protected $table = 'small_ads_sub_categories';

    public function getRouteKeyName()
    {
        return 'link'; // Jeśli 'link' to Twoje pole slug
    }

    public function SmallAdsContent()
    {
        return $this->hasMany(SmallAdsContent::class);
    }

    /*
    * The attributes that are mass assignable.
    *
    * @var array
    */
}
