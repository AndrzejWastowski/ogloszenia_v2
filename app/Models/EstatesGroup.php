<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstatesGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id', 'name',
   ];

    protected $table = 'estates_groups';

    public function estatesGroups()
    {
        //return $this->belongsTo('products','');
    }
}
