<?php

namespace App\Models;


use App\Models\Excursion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class resarvations extends Model
{ use HasFactory;

    public $timestamps = false;
    protected $appends = ['display'];
    protected $fillable = ['user_id', 'excursion_id', 'start', 'rented', 'end', 'limit'];

    public function getDisplayAttribute() 
    {
        return 'background';
    }

   
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function Excursion()
    {
        return $this->belongsTo(Excursion::class);
    }
}
