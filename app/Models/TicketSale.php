<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSale extends Model
{
    use HasFactory;
    protected $table = 'TicketSales';
    protected $fillable = ['ticket_id', 'user_id', 'purchase_date', 'quantity', 'total_amount'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
