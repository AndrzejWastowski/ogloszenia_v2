<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsPhoto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['id', 'cars_contents_id', 'name', 'sort',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'created_at', 'updated_at',
   ];

    public function estatesContent()
    {
        return $this->belongsTo(CarsContent::class, 'id');
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

    public function get_estates_contents_id():int 
    {
        return $this->estates_contents_id;
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

    public function set_cars_contents_id(?int $value): void
    {
        $this->cars_contents_id = $value;
    }

    
    public function set_sort(?int $value): void
    {
        $this->sort = $value;
    }

}
