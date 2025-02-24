<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EventFeedback extends Model
{
   // use SoftDeletes;

    protected $table = 'EventFeedback';
    protected $fillable = ['event_id', 'user_id', 'feedback_text', 'feedback_rating', 'feedback_date'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
