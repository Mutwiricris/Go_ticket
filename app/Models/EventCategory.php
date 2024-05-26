<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $table = 'EventCategories';
    protected $fillable = ['category_name', 'category_description'];

    public function events()
    {
        return $this->hasMany(Event::class, 'category_id');
    }
}

