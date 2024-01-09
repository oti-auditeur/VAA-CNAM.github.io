<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultural extends Model
{
    use HasFactory;

    protected $fillable = ['history of the canoe', 'construction', 'the journey', 'the dugout canoe today', 'vocabulary'];

    /*public function trainings()
    {
        return $this->belongsToMany(Training::class, 'category_training');
    }*/
}
