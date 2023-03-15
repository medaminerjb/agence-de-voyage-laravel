<?php

namespace App\Models;

use App\Models\resarvations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;
    public $timestamps = false;
protected $fillable = ['id', 'text', 'image'];



}