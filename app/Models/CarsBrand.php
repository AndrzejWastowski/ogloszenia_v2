<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsBrand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'link'];

    protected $table = 'cars_brands';

    public function CarsModels()
    {
        return $this->hasMany(CarsModel::class, 'cars_brands_id');
    }
}
