<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallAdsContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id',
    'users_id',
    'name',
    'condition',
    'lead',
    'description',
    'items',
    'price',
    'date_start',
    'date_end',
    'small_ads_categories_id',
    'small_ads_sub_categories_id',
    'small_ads_user_group_id',
    'small_ads_classified_enum',
    'views',
    'contact_phone',
    'contact_email',
    'adresses_id',
    'master_portal',
    'promoted',
    'highlighted',
    'inscription',
    'adress_ip',
    'port',
    'host',
    'browser',
    'portal_id', 
    'status',
    'invoice', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'created_at', 'updated_at',
    ];

    public function SmallAdsCategories()
    {
        return $this->belongsTo(SmallAdsCategorie::class, 'small_ads_categories_id');
    }

    public function SmallAdsSubCategories()
    {
        return $this->belongsTo(SmallAdsSubCategorie::class, 'small_ads_sub_categories_id');
    }

    public function photos()
    {
        return $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id');
    }

        public function TopPhotos()
    {
        //$result = $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id')
        
        $result = $this->hasMany(SmallAdsPhoto::class, 'small_ads_contents_id')
        ->where('sort',1)
        ->limit(1);
        return $result;        
    }




    /**
     * Display the first photo
     * return one database small_ads_photos record.
     */
    public function firstPhotos()
    {
        $result = $this->belongsTo(SmallAdsPhoto::class, 'small_ads_contents_id');

        return $result;
    }

    public function user()
    {
        $result = $this->belongsTo(User::class, 'users_id');

        return $result;
    }

    public function addresses()
    {
        $result = $this->belongsTo(Adresses::class, 'users_id');

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

    public function get_condition(): string
    {
        return $this->condition;
    }

    public function get_lead(): string
    {
        return $this->lead;
    }

    public function get_description(): string
    {
        return $this->description;
    }

    public function get_items(): int
    {
        return $this->items;
    }

    public function get_price(): float
    {
        return $this->price;
    }

    public function get_date_start(): string
    {
        return $this->date_start;
    }

    public function get_date_end(): string
    {
        return $this->date_end;
    }

    public function get_small_ads_categories_id(): int
    {
        return $this->small_ads_categories_id;
    }

    public function get_small_ads_sub_categories_id(): int
    {
        return $this->small_ads_sub_categories_id;
    }

    public function get_small_ads_user_group_id(): int
    {
        return $this->small_ads_user_group_id;
    }

    public function get_small_ads_classified_enum(): string
    {
        return $this->small_ads_classified_enum;
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

    public function set_name(?string $value): void
    {
        $this->name  = $value;
    }

    public function set_condition(?string $value): void
    {
        $this->condition  = $value;
    }

    public function set_lead(?string $value): void
    {
        $this->lead  = $value;
    }

        public function set_description(?string $value): void
    {
        $this->description  = $value;
    }

    public function set_items(?int $value): void
    {
        $this->items  = $value;
    }

    public function set_price(?float $value): void
    {
        $this->price  = $value;
    }

    public function set_date_start(string $value): void
    {
        $this->date_start = $value;
    }

    public function set_date_end(?string $value): void
    {
        $this->date_end = $value;
    }

    public function set_small_ads_categories_id(int $value): void
    {
        $this->small_ads_categories_id = $value;
    }

    public function set_small_ads_user_group_id(int $value): void
    {
        $this->small_ads_user_group_id = $value;
    }

    public function set_small_ads_sub_categories_id(int $value): void
    {
        $this->small_ads_sub_categories_id = $value;
    }

    public function set_small_ads_classified_enum(?string $value): void
    {
        $this->small_ads_classified_enum = $value;
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