<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EventOrganizer extends Model
{
    protected $table = 'EventOrganizers';
    protected $fillable = ['username', 'email', 'password', 'first_name', 'last_name', 'phone_number', 'address', 'company_name'];

    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id');
    }
}