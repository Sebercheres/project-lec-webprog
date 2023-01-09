<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationHistory extends Model
{
    use HasFactory;
    protected $timestamps = false;
    protected $guarded = ['id'];

    protected $dates = ['donation_date'];
}
