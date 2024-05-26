<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'Payments';
    protected $fillable = ['sale?_id', 'payment_method', 'payment_status', 'payment_date'];

    public function sale()
    {
        return $this->belongsTo(TicketSale::class, 'sale_id');
    } 

    // Accessor to ensure the status is always correctly handled
    public function getPaymentStatusAttribute($value)
    {
        return strtolower($value);
    }

    // Mutator to validate payment status when setting it
    public function setPaymentStatusAttribute($value)
    {
        $allowedStatuses = ['confirmed', 'failed', 'pending'];
        if (!in_array(strtolower($value), $allowedStatuses)) {
            throw new \InvalidArgumentException("Invalid payment status");
        }
        $this->attributes['payment_status'] = strtolower($value);
    }
}
