<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationHistory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $dates = ['donation_date'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function donation() {
        return $this->belongsTo(Donation::class);
    }
}
