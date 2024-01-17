<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstatesCategorie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id', 'name', 'link', 'estates_groups_id',
   ];

    protected $table = 'estates_categories';


}
