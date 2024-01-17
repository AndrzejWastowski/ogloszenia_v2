<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallAdsPhoto extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public $timestamps = false;

    protected $fillable = ['id', 'name', 'small_ads_contents_id', 'sort'];

    

       /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
       ];

    protected $table = 'small_ads_photos';

    public function adsContent()
    {
        return $this->belongsTo(SmallAdsContent::class, 'id');
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */

    public function get_id(): int
    {
        return $this->id;
    }  


    public function get_name(): string
    {
        return $this->name;
    }

    public function get_small_ads_contents_id():int 
    {
        return $this->small_ads_contents_id;
    }

    public function get_sort(): int
    {
        return $this->sort;
    }


    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */

    public function set_name(string $value): void
    {
        $this->name = $value;
    }

    public function set_small_ads_contents_id(?int $value): void
    {
        $this->small_ads_contents_id = $value;
    }

    
    public function set_sort(?int $value): void
    {
        $this->sort = $value;
    }

}
