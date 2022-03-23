<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cars extends Model
{
    use HasFactory;
    protected $fillable = ['reg_no', 'year_of_manufacture', 'car_types_id','tonnage', 'user_id'];

    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function car_types():BelongsTo{
        return $this->belongsTo(CarTypes::class);
    }
}
