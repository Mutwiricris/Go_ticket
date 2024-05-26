<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'Tickets';
    protected $fillable = ['event_id', 'ticket_type_id', 'ticket_price', 'ticket_quantity'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
    }

    public function sales()
    {
        return $this->hasMany(TicketSale::class, 'ticket_id');
    }
}
