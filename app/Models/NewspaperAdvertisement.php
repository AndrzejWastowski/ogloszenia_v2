<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewspaperAdvertisement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'newspaper_id',
        'advertisement_id',
        'advertisement_type',
        'payments_id',
        'date',
        'name',
        'status',
    ];

    protected $table = 'prices';


}
