<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Customer;

class Booking extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'code',
        'booking_code',
        'fly_code',
        'customer_id',
        'service_price',
        'service_price',
        'total',
        'trip',
        'booking_date',
        'booking_date',
        'pay_date',
        'from',
        'to',
        'fly_date',
        'pay_method',
        'note'
    ];

    public function getCustomer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
