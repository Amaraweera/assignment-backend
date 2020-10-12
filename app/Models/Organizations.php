<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Organizations extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'organizations';

    protected $fillable = [
        'name', 'details'
    ];

    /**
     * Get the users.
     */
    public function users()
    {
        return $this->hasMany('App\Models\Users', 'organization_id');
    }

    /**
     * Get the tickets.
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Tickets', 'organization_id');
    }
}
