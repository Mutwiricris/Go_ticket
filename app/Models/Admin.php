<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
        protected $table = 'Admins';
        protected $fillable = ['username', 'email', 'password', 'first_name', 'last_name', 'phone_number', 'address'];
    
}
