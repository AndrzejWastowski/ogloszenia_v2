<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewspaperEdition extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id' , 'newspaper_id', 'date','description', 'status'];

    protected $table = 'newspaper_edition';

    public function Newspaper()
    {
        return $this->belongsTo(Newspaper::class, 'newspaper_id');
    }

    public function get_id(): int
    {
        return $this->id;
    }   
    
    public function ge_date(): string
    {
        return $this->date;
    }   

    public function get_description(): string
    {
        return $this->description;
    }   


    public function get_status(): string
    {
        return $this->status;
    }   

}
