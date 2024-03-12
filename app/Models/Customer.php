<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Booking;

class Customer extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['name', 'email', 'phone', 'contact'];

    public function getBooking(): HasMany
    {
        return $this->hasMany(Booking::class)->withPivot('deleted_at')->wherePivot('deleted_at', "=", null);
    }
}
