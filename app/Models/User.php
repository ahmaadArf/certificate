<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail,JWTSubject
{
    use HasFactory, HasApiTokens,  Notifiable, Billable, SoftDeletes; // FileableTrait

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'first_name',
        'last_name',
        'trading_name',
        'company_name',
        'phone',
        'registration_number',
        'registered_address',
        'number_street_name',
        'city',
        'postal_code',
        'country_id',
        'user_id',
        'manager_id',
        'currency',
        'vat_number',
        'email',
        'password',
        'has_vat',
        'website',
        'mobile_number',
        'image',
        'birth_date',
        'state',
        'type',
        'trial_ends_at',
    ];

    public $appends = ['image_profile_url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at'=>'datetime',
    ];

    public function BusinessType()
    {
        return $this->belongsToMany(BusinessType::class, 'user_business_type', 'user_id', 'business_type_id');
    }


    public function getJWTIdentifier() {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function userEmail()
    {
        return $this->hasOne(UserEmail::class, 'user_id');
    }


    public function taxsetting()
    {
        return $this->belongsTo(TaxSetting::class);
    }


    public function CustomerType()
    {
        return $this->belongsTo(CustomerType::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function sitecontact()
    {
        return $this->belongsTo(SiteContact::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }



    public function signature()
    {
        return $this->hasOne(Signature::class);
    }


    /*   public function deviceTokens()
    {
        return $this->hasMany(DeviceToken::class);
    } */

    public function forms()
    {
        return $this->belongsToMany(Form::class, 'forms_users')->withPivot('tax_id', 'price');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'categories_users')->withPivot('electric_board_id','license_number','gas_register_number');
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class, 'user_id');
    }

    public function getUrlAttribute(): string
    {

        if ($this->files) {
            return $this->files()->first()->url;
        } else {
            return false;
        }
    }
    public function getImageProfileUrlAttribute(): string
    {
        if ($this->image) {
            return asset('uploads/' . $this->image);
        } else if ($this->url) {
            return asset('uploads/' . $this->url);
        } else {
            return asset('assets/img/avatar.png');
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $url = route('password.reset', $token);

        $this->notify(new ResetPasswordNotification($url));
    }


    public function logo(){
        return $this->morphOne(File::class, 'file', 'model_type', 'model_id', 'id')
        ->where('name_file', '=', 'user_logo');;
    }
    /**
     * Specifies the user's FCM tokens
     *
     * @return string|array
     */
    /*  public function routeNotificationForFcm($notification = null)
    {
        return $this->deviceTokens()->pluck('token')->toArray();
    } */
}
