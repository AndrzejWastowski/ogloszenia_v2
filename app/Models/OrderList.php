<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Decimal;

class OrderList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'id', 
        'order_id', //id zamówienia      
        'name', //Nazwa towaru
        'description', //Dodatkowy opis towaru (opcjonalnie)
        'quantity', //Ilość sztuk 
        'price', //Cena jednostkowa
        'number' //ID towaru w systemie sprzedawcy (opcjonalnie)]
        ]; 

    protected $table = 'orders_list';

    public function Order()
    {
        return $this->belongsTo(Order::class, 'id');
    }
    /*

  /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */

    public function get_id(): int
    {
        return $this->id;
    }       
     
    public function order_id(): int
    {
        return $this->order_id;
    }       

    public function get_name(): string
    {
        return $this->name;
    }   

    public function get_description(): string
    {
        return $this->description;
    }  
   
    public function get_quantity(): int
    {
        return $this->quantity;
    }
    
    public function get_price(): float
    {
        return $this->price;
    }  
    public function get_number(): int
    {
        return $this->number;
    }  
   
}
