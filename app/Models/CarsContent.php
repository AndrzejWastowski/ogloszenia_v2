<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CarsContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',   
        'lead', 
        'description', 
        'cars_brands_id', 
        'cars_models_id', 
        'cars_body_id',
        'color',
        'date_start',
        'date_end',
        'date_production',
        'date_registration' ,
        'country_registration',
        'poland_registration',
        'power',        
        'capacity',
        'doors_number',
        'seats',
        'condition',  
        'technical_condition',    
        'accident',  
        'price',
        'mileage',
        'fuel_type',        
        'invoice',
        'status',
        'views',
        'contact_phone',
        'contact_email', 
        'adresses_id', 
        'master_portal',
        'promoted',
        'top',
        'highlighted',
        'inscription',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'adress_ip',
        'host',
        'port','
        browser',
        'portal_id',
    ];

    public function carsModels()
    {
        return $this->belongsTo(CarsModel::class, 'cars_models_id');
    }

    public function carsBrands()
    {
        
        return $this->belongsTo(CarsBrand::class, 'cars_brands_id');
    }

    public function carsBody()
    {
        
        return $this->belongsTo(carsBody::class, 'cars_body_id');
    }

    public function photos()
    {
        return $this->hasMany(CarsPhoto::class, 'cars_contents_id');
    }


    public function top_photos()
    {
        return $this->hasMany(CarsPhoto::class,'cars_contents_id');
    }

    /**
     * Display the first photo
     * return one database ads_photos record.
     */
    public function firstPhotos()
    {
        $result = $this->belongsTo(CarsPhoto::class, 'cars_contents_id');

        return $result;
    }

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

 
     public function get_lead(): string
    {
        return $this->lead;
    }

    public function get_description(): string
    {
        return $this->description;
    }

    public function get_condition(): string
    {
        return $this->condition;
    }
    public function get_technical_condition(): int
    {
        return $this->technical_condition;
    }
    
    public function get_accident(): int
    {
        return $this->get_accident;
    }
    
    

    public function get_country_registration(): string
    {
        return $this->country_registration;
    }
    
    public function get_poland_registration(): string
    {
        return $this->poland_registration;
    }

    public function get_cars_type(): int
    {
        return $this->cars_type;
    }

    public function get_cars_brands_id(): int
    {
        return $this->cars_brands_id;
    }

    
    public function get_cars_models_id(): int
    {
        return $this->cars_models_id;
    }

    public function get_cars_body_id(): int
    {
        return $this->get_cars_body_id;
    }


public function get_area(): int
    {
        return $this->area;
    }

    public function get_unit(): float
    {
        return $this->unit;
    }

    public function get_market(): int
    {
        return $this->market;
    }
    
    public function get_price(): int
    {
        return $this->price;
    }
    
    public function get_power(): int
    {
        return $this->price;
    }
 
    public function get_seats(): int
    {
        return $this->seats;
    }

    public function get_capacity(): int
    {
        return $this->capacity;
    }
    
    public function get_doors_number(): int
    {
        return $this->doors_number;
    }
    
   
    public function get_date_end(): int
    {
        return $this->date_end;
    }

    public function get_date_production(): string
    {
        return $this->date_production;
    }

    public function get_views(): string
    {
        return $this->views;
    }

    public function get_contact_phone(): string
    {
        return $this->contact_phone;
    }

    public function get_contact_email(): string
    {
        return $this->contact_email;
    }

    public function get_adresses_id(): int
    {
        return $this->adresses_id;
    }

    
  
    public function get_top(): int
    {
        return $this->top;
    }
    
    public function get_promoted(): int
    {
        return $this->promoted;
    }

    public function get_master_portal(): int
    {
        return $this->master_portal;
    }

    public function get_highlighted(): string
    {
        return $this->highlighted;
    }

    public function get_inscription(): string
    {
        return $this->inscription;
    }

    public function get_adress_ip(): string
    {
        return $this->adress_ip;
    }

    public function get_host(): string
    {
        return $this->host;
    }

    public function get_port(): int
    {
        return $this->get_port;
    }

    public function get_browser(): string
    {
        return $this->browser;
    }
    

    public function get_portal_id(): int
    {
        return $this->portal_id;
    }

    public function get_status(): string
    {
        return $this->status;
    }

    public function get_invoice(): string
    {
        return $this->invoice;
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

    
    public function set_cars_type(?string $value): void
    {
        $this->cars_type  = $value;
    }

    public function set_lead(?string $value): void
    {
        $this->lead  = $value;
    }

    public function set_description(?string $value): void
    {
        $this->description  = $value;
    }


    public function set_condition(?string $value): void
    {
        $this->condition  = $value;
    }


    public function set_technical_condition(?int $value): void
    {
        $this->technical_condition  = $value;
    }

    public function set_accident(?int $value): void
    {
        $this->accident  = $value;
    }

    
    public function set_country_registration(?string $value): void
    {
        $this->country_registration  = $value;
    }

    public function set_poland_registration(?int $value): void
    {
        $this->poland_registration  = $value;
    }


    public function set_unit(?string $value): void
    {
        $this->unit  = $value;
    }

    public function set_area(?string $value): void
    {
        $this->area  = $value;
    }

    public function set_price(?float $value): void
    {
        $this->price  = $value;
    }


    public function set_power(?int $value): void
    {
        $this->power  = $value;
    }

    public function set_seats(?int $value): void
    {
        $this->seats  = $value;
    }

    public function set_capacity(?int $value): void
    {
        $this->capacity  = $value;
    }
    
    public function set_doors_number(?int $value): void
    {
        $this->doors_number  = $value;
    }


    public function set_market(?string $value): void
    {
        $this->market  = $value;
    }


    public function set_date_start(string $value): void
    {
        $this->date_start = $value;
    }

    public function set_date_end(?string $value): void
    {
        $this->date_end = $value;
    }

    public function set_cars_brands_id(int $value): void
    {
        $this->cars_brands_id = $value;
    }


    
    public function set_cars_models_id(int $value): void
    {
        $this->cars_models_id = $value;
    }


    public function set_cars_body_id(int $value): void
    {
        $this->cars_body_id = $value;
    }

    public function set_date_production(?string $value): void
    {
        $this->date_production = $value;
    }


    public function set_date_registration(?string $value): void
    {
        $this->date_registration = $value;
    }


    public function set_views(?int $value): void
    {
        $this->views = $value;
    }

    public function set_contact_phone(?string $value): void
    {
        $this->contact_phone = $value;
    }
    public function set_contact_email(?string $value): void
    {
        $this->contact_email = $value;
    }

    public function set_adradresses_idess_id(?int $value): void
    {
        $this->adresses_id = $value;
    }


    public function set_master_portal(?bool $value): void
    {
        $this->master_portal = $value;
    }

    public function set_promoted(?bool $value): void
    {
        $this->promoted = $value;
    }

    public function set_top(?bool $value): void
    {
        $this->top = $value;
    }


    public function set_highlighted(?string $value): void
    {
        $this->highlighted = $value;
    }

    public function set_inscription(string $value): void
    {
        $this->inscription = $value;
    }

    public function set_adress_ip(?string $value): void
    {
        $this->adress_ip = $value;
    }

    public function set_host(?string $value): void
    {
        $this->host = $value;
    }

    public function set_port(?int $value): void
    {
        $this->port = $value;
    }

    public function set_browser(?string $value): void
    {
        $this->browser = $value;
    }

    public function set_portal_id(?int $value): void
    {
        $this->status = $value;
    }
    
    public function set_status(?string $value): void
    {
        $this->status = $value;
    }

    public function set_invoice(?string $value): void
    {
        $this->invoice = $value;
    }
}
