<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Newspaper extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name','status'];

    protected $table = 'newspaper';


    public function Editions()
    {
        $data = $this->hasMany(NewspaperEdition::class, 'newspaper_id', 'id');
        return $data;
    }

    public function AvaibleEditions()
    {
        $data = $this->hasMany(NewspaperEdition::class, 'newspaper_id')
        ->whereDate('date','>',DB::raw("DATE_ADD(NOW(), INTERVAL 3 DAY)"))
        ->where('status','=', 'active');

      
        return $data;
    }
}