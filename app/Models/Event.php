<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'Events';
    protected $fillable = ['event_name', 'event_description', 'event_start_date', 'event_end_date', 'event_venue', 'organizer_id', 'category_id'];

    public function organizer()
    {
        return $this->belongsTo(EventOrganizer::class, 'organizer_id');
    }

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'category_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'event_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(EventFeedback::class, 'event_id');
    }

    public function socialMediaLinks()
    {
        return $this->hasMany(SocialMediaLink::class, 'event_id');
    }
};

