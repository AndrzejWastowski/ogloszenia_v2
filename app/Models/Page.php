<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'link','lead','description'];
    protected $table = 'pages';

    public function getRouteKeyName()
    {
        return 'link'; // Jeśli 'link' to Twoje pole slug
    }
}
