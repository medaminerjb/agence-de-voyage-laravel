<?php

namespace App\Models;

use App\Models\resarvations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    public function resarvations()
{
    return $this->belongsTo(resarvations::class);
}
}
