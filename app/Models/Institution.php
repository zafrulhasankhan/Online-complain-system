<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    use HasFactory;
    protected $fillable = [
        'varsity_name', 'hall_name', 'description','admin_id',"admin_mail"
    ];
}
