<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    protected $table = "cities";

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function excursions()
    {
        return $this->belongsToMany(Excursion::class, 'cities_excursions');
    }
}
