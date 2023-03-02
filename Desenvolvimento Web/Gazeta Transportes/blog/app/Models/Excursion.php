<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Excursion extends Model
{
    use HasFactory;
    protected $table = "excursions";

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function cities()
    {
        return $this->belongsToMany(City::class, 'cities_excursions');
    }

    public function datas() {
        return $this->belongsToMany(Date::class, 'dates_excursions');
    }

    public function clients() {
        return $this->belongsToMany(Client::class);
    }
}
