<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
