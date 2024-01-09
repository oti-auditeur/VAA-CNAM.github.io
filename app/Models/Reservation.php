<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'tel_number',
        'email',
        'canoe_id',
        'res_date',
        'guest_number'
    ];

    protected $dates = [
        'res_date'
    ];



    public function canoe()
    {
        return $this->belongsTo(Canoe::class);
    }
}
