<?php

namespace App\Models;

use App\Enums\CanoeType;
use App\Enums\CanoeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canoe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'guest_number', 'status', 'type'];

    protected $casts = [
        'status' => CanoeStatus::class,
        'type' => CanoeType::class
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
