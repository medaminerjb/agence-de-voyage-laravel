<?php

namespace App\Models;

use App\Models\resarvations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Excursion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'text', 'image','image1','image2','image3'];


    public function reservations()
{
    return $this->hasMany(resarvations::class);
}
}
