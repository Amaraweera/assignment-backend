<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Tickets extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tickets';

    protected $fillable = [
        'url', 'type', 'subject', 'description', 'priority', 'status'
    ];

    /**
     * Get submitter.
     */
    public function submitter()
    {
        return $this->belongsTo('App\Models\Users', 'submitter_id');
    }

    /**
     * Get assignee.
     */
    public function assignee()
    {
        return $this->belongsTo('App\Models\Users', 'assignee_id');
    }

    /**
     * Get organization.
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organizations', 'organization_id');
    }
}
