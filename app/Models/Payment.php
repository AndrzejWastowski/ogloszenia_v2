<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'users_id',
        'orders_id',
       
        'p24_session_id',
        'p24_amount',
        'p24_description',
        'p24_email',
        'p24_client',
        'p24_address',
        'p24_zip',
        'p24_city',
        'p24_country',
        'p24_phone',
        'p24_language',
        'p24_transfer_label',


    ];

    protected $table = 'payments';


    public function user()
    {
        $result = $this->belongsTo(User::class, 'users_id');

        return $result;
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
    
    public function get_users_id(): int
    {
        return $this->users_id;
    }   

    public function get_name(): int
    {
        return $this->name;
    }

    public function p24_session_id(): int
    {
        return $this->p24_session_id;
    }

    public function p24_amount(): int
    {
        return $this->p24_amount;
    }

    public function p24_description(): string
    {
        return $this->p24_description;
    }

    public function p24_email(): string
    {
        return $this->p24_email;
    }
    
    public function p24_client(): string
    {
        return $this->p24_client;
    }    

    public function p24_address(): string
    {
        return $this->p24_address;
    }
    
    public function p24_zip(): string
    {
        return $this->p24_zip;
    }
    
    public function p24_city(): string
    {
        return $this->p24_city;
    }
    
    public function p24_country(): string
    {
        return $this->p24_country;
    }
    
    public function p24_phone(): string
    {
        return $this->p24_phone;
    }
    
    public function p24_language(): string
    {
        return $this->p24_language;
    }
    
    public function p24_transfer_label(): string
    {
        return $this->p24_transfer_label;
    }
  

    
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */

    public function set_users_id(?int $value): void
    {
        $this->users_id = $value;
    }

    public function set_name(?string $value): void
    {
        $this->name  = $value;
    } 

    public function set_p24_session_id(?string $value): void
    {
        $this->p24_session_id  = $value;
    } 
    
    
    public function set_p24_amount(?string $value): void
    {
        $this->p24_amount  = $value;
    } 

    public function set_p24_description(?string $value): void
    {
        $this->p24_description  = $value;
    } 
    
    public function set_p24_email(?string $value): void
    {
        $this->p24_email  = $value;
    } 
  
    public function set_p24_client(?string $value): void
    {
        $this->p24_client  = $value;
    } 
   
    public function set_p24_address(?string $value): void
    {
        $this->p24_address  = $value;
    } 

    public function set_p24_zip(?string $value): void
    {
        $this->p24_zip  = $value;
    } 
  
    public function set_p24_city(?string $value): void
    {
        $this->p24_city  = $value;
    }

    public function set_p24_country(?string $value): void
    {
        $this->p24_country  = $value;
    }

    public function set_p24_phone(?string $value): void
    {
        $this->p24_phone  = $value;
    }

    public function set_p24_language(?string $value): void
    {
        $this->p24_language  = $value;
    }    
    
}
