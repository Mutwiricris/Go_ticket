<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    use HasFactory;
    protected $table = 'SocialMediaLinks';
    protected $fillable = ['event_id', 'social_media_platform', 'link_url'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
