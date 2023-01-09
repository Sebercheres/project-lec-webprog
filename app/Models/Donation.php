<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $timestamps = false;
    protected $guarded = ['id'];

    protected $dates = ['final_date'];
}
