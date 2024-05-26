<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $table = 'Refunds';
    protected $fillable = ['sale_id', 'refund_amount', 'refund_date', 'refund_reason'];

    public function sale()
    {
        return $this->belongsTo(TicketSale::class, 'sale_id');
    }
}
