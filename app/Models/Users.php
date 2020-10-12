<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Users extends Eloquent
{
    use HasFactory, Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';

    protected $fillable = [
        'name', 'email', 'phone'
    ];

    /**
     * Get the assignTickets.
     */
    public function assignTickets()
    {
        return $this->hasMany('App\Models\Tickets', 'assignee_id');
    }

    /**
     * Get the submitTickets.
     */
    public function submittedTickets()
    {
        return $this->hasMany('App\Models\Tickets', 'submitter_id');
    }

    /**
     * Get the user organization.
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organizations', 'organization_id');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
