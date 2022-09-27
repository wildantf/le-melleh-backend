<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_code',
        'user_id',
        'delivery_address_id',
        'payment_method_id',
        'total_price',
        'total_weight',
        'delivery_price',
        'total_pay',
        'transaction_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function deliveryAdress()
    {
        return $this->belongsTo(DeliveryAddress::class, 'delivery_address_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(TransactionItems::class, 'transaction_id', 'id');
    }
}
