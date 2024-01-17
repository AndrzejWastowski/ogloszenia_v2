<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    protected $fillable = ['id', 'cars_brands_id', 'name'];
    
    protected $table = 'cars_models';

    public function CarsBrands()
    {
        return $this->belongsTo(CarsBrands::class, 'cars_brands_id');
    }


    /*
    * The attributes that are mass assignable.
    *
    * @var array
    */
}
