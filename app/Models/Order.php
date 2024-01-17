<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Decimal;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'id', 
        'name', //Nazwa - indywidualny numer zamowienia
        'payments_id', 
        'addons_id', //id ogłoszenia
        'section', //sekcja do której należy dane ogłoszenie (drobne, samochody, nieruchomosci itd..) 
        'users_id', //id użytkownika którego dotyczy zamowienie
        'date_add', //data utworzenia zamówienia   
        'price_summary', //Cena całkowita    
        'invoice', //czy faktura
        'status', // czy zapłacone, aktywne, anulowane
    ];

/*     protected $attributes = [
    'id' => 0, 
    'name' => null, //Nazwa - indywidualny numer zamowienia
    'payments_id' => 0, 
    'addons_id' =>0, //id ogłoszenia
    'section' => null, //sekcja do której należy dane ogłoszenie (drobne, samochody, nieruchomosci itd..) 
    'users_id' => 0, //id użytkownika którego dotyczy zamowienie
    'date_add', //data utworzenia zamówienia   
    'price_summary' => 0, //Cena całkowita    
    'invoice', //czy faktura
    'status', // czy zapłacone, aktywne, anulowane
]; */

    protected $table = 'orders';
  
    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
   
    public function OrderList()
    {
        $result = $this->hasMany(OrderList::class, 'order_id');

        return $result;
    }

    public function deleteOrderList()
    {
       // dd($this->id);
        DB::table('orders_list')->where('order_id', '=', $this->id)->delete(); 
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
    
    public function get_payments_id(): int
    {
        return $this->payments_id;
    }       

    public function get_addons_id(): int
    {
        return $this->addons_id;
    }   

    public function get_section(): string
    {
        return $this->section;
    }   
    
    public function get_users_id(): int
    {
        return $this->users_id;
    }

    public function get_date_add(): string
    {
        return $this->date_add;
    }

    public function get_price_summary(): int
    {
        return (int)$this->price_summary;
    }

    public function get_invoice(): string
    {
        return $this->invoice;
    }

    public function get_status(): string
    {
        return $this->status;
    }


    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */

  

    public function set_name(?string $value): void
    {
        $this->name = $value;
    }

    public function set_payments_id(?int $value): void
    {
        $this->payments_id  = $value;
    }

    public function set_addons_id(?int $value): void
    {
        $this->addons_id  = $value;
    }

    public function set_section(?string $value): void
    {
        $this->section  = $value;
    }

    public function set_users_id(?int $value): void
    {
        $this->users_id  = $value;
    }

    public function set_date_add(?string $value): void
    {
        $this->date_add  = $value;
    }

    public function set_price_summary(?int $value): void
    {
        $this->price_summary  = $value;
    }

    public function set_invoice(?bool $value): void
    {
        $this->invoice  = $value;
    }

    public function set_status(?string $value): void
    {
        $this->status  = $value;
    }

    
}
