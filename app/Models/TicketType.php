<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory;
    protected $table = 'TicketTypes';
    protected $fillable = ['ticket_type_name', 'ticket_type_description'];

}
